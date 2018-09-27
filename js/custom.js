// ***************************** ADMIN SECTION *****************************************************************************



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

function setCookie(cname, cvalue) {
    document.cookie = cname + "=" + cvalue ;
}

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

function authenticate_admin(){
    var username=document.getElementById('admin_username_in').value;
    var password=document.getElementById('admin_password_in').value;
    var authenticated=false;
    $.ajax({

        type: "POST",
         url: "./controller/admin_authenticate.php",
         async: false,
         data: {admin_username_in:username,admin_password_in:password},
         success : function(response)
         {
             if(response){
                 
                 var arr=JSON.parse(response);
                 setCookie('username',arr[0]);
                 var branch=arr.slice(1);
                 
                 setCookie('branch',branch);
                 setCookie('branch_selected',branch[0]);
                 authenticated = true;
             }
             else
             {
                 alert("Username or Password incorrect");
             }
             
         }
});
if(authenticated){
    
    location.replace("admin.php");
    
}

}

function remove_staff($staffID){
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
                 url: "controller/staff_remove.php",
                 async: false,
                 data: {staffID:$staffID},
                 success : function(text)
                 {
                     status = text;
                     swal("This staff has been deleted!", {
						icon: "success",
					 });
					 location.reload();

                 }
      });


			
		} 
	});

	
}


function add_currency(){
	var name=document.getElementById("input_currency_name").value;
	var amount=document.getElementById("input_currency_amount").value;
    var image=document.getElementById("input_currency_image").files[0].name;
    alert(image);
    	
	$.ajax({

                type: "POST",
                 url: "controller/inventory_add.php",
                 async: false,
                 data: {name:name,amount:amount,image:image},
                 success : function(text)
                 {
                     status = text;
                     alert(status);
                     
                 }
      });

}






//***************************************This is Staff Section************************************************************************

function authenticate_staff(){
    var username=document.getElementById('staff_username_in').value;
    var password=document.getElementById('staff_password_in').value;
    var branch=document.getElementById('staff_branch_in').value;
    var authenticated=false;
    $.ajax({

        type: "POST",
         url: "./controller/staff_authenticate.php",
         async: false,
         data: {username:username,password:password,branch:branch},
         success : function(response)
         {
             if(response){
                 alert(response);
                 
                 authenticated = true;
             }
             else
             {
                 alert("Username, Password or Branch incorrect");
             }
             
         }
});
if(authenticated){
    
    location.replace("staff.php");
    
}
}


function check_currency_balance(){
    $id=document.getElementById('currency_selector').value;
    alert($id);
    $.ajax({

        type: "POST",
         url: "./controller/check_currency_balance.php",
         async: false,
         data: {id:$id},
         success : function(response)
         {
             if(response){
                 alert(response);
                 
            }
        }
    }); 
}
