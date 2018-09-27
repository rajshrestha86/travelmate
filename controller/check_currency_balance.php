<?php
    include 'connection.php';

    if($_POST){	
        $id=$_POST['id'];
       
        $sql="SELECT * FROM inventory WHERE id=$id";
        $result=mysqli_query($conn,$sql);
        $count = 1;
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['total'];
    
        }
	}
   
?>