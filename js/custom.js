/*function remove_branch($branchID){
	alert($branchID);

	$.ajax({

                type: "POST",
                 url: "controller/branch_remove.php",
                 async: false,
                 data: {branchID:$branchID},
                 success : function(text)
                 {
                     status = text;
                     alert(status);
                 }
      });
	
}
*/

var branchID;
function remove_branch($branchID){
	swal({
		title: "Are you sure?",
		text: "Once deleted, you will not be able to recover this information!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({

                type: "POST",
                 url: "controller/branch_remove.php",
                 async: false,
                 data: {branchID:$branchID},
                 success : function(text)
                 {
                     status = text;
                     swal("This branch has been deleted!", {
						icon: "success",
					 });
					 location.reload();

                 }
      });


			
		} 
	});

	
}

function edit_branch($branchID,$branchName,$branchAddress,$contact){

	document.getElementById("edit_branch_area").style.display="block";
	document.getElementById("branch_name").value=$branchName;
	document.getElementById("branch_address").value=$branchAddress;
	document.getElementById("branch_contact").value=$contact;	
	branchID=$branchID;
}

function update_branch(){
	
	var new_name=document.getElementById("branch_name").value;
	var new_address=document.getElementById("branch_address").value;
	var new_contact=document.getElementById("branch_contact").value;
	$.ajax({

                type: "POST",
                 url: "controller/branch_update.php",
                 async: false,
                 data: {branchID:branchID,name:new_name,address:new_address,contact:new_contact},
                 success : function(text)
                 {
                     status = text;
                     
                 }
      });

	alert(status);
	location.reload();

	


}

function register_branch(){
	var name=document.getElementById("input_branch_name").value;
	var address=document.getElementById("input_branch_address").value;
	var contact=document.getElementById("input_branch_contact").value;
	alert(name+address+contact);
	$.ajax({

                type: "POST",
                 url: "controller/branch_add.php",
                 async: false,
                 data: {name:name,address:address,contact:contact},
                 success : function(text)
                 {
                     status = text;
                     
                 }
      });

	alert(status);
	windows.location.replace('branch_manage.php');

}
