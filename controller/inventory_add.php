<?php
	include 'connection.php';
	if($_POST){		
		$name=$_POST['name'];
		$total=$_POST['amount'];
        $image=$_POST['image'];	
        $branch=$_COOKIE['branch_selected'];
        $sq="SELECT id FROM branch WHERE name = '$branch';";
        $res=mysqli_query($conn,$sq);
        if($res){
            $row = mysqli_fetch_assoc($res);
            $branchID=$row['id'];

            $sql="INSERT INTO inventory (name,total,image,branch) VALUES ('$name', $total, '$image', '$branchID');";
		    $result=mysqli_query($conn,$sql);
		    if($result)
			    echo "Success";
		    else
			    echo $conn->connect_error;

        }	
        
		
	}
?>