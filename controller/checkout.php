<?php
	include 'connection.php';
	if($_POST){		
		$name=$_POST['name'];
		$bank_name=$_POST['bank_name'];
		$contact=$_POST['contact'];
		$file=$_FILES["photo"]["name"];
		echo "Filename ".$file;
		
		
		


    
		
		
		if(isset($_FILES["photo"]) ){
			$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
			$filename = $_FILES["photo"]["name"];
			$filetype = $_FILES["photo"]["type"];
			$filesize = $_FILES["photo"]["size"];
		
			// Verify file extension
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(!array_key_exists($ext, $allowed))
				die("Error: Please select a valid file format.");
		
			// Verify file size - 5MB maximum
			$maxsize = 5 * 1024 * 1024;
			if($filesize > $maxsize)
				die("Error: File size is larger than the allowed limit.");
		
				// Verify MYME type of the file
				if(in_array($filetype, $allowed)){
					// Check whether file exists before uploading it
					if(file_exists("../upload/" . $_FILES["photo"]["name"])){
						echo $_FILES["photo"]["name"] . " is already exists.";
					} 
					else{
						
							$row = mysqli_fetch_assoc($res);
							$branchID=$row['id'];

							$sql="INSERT INTO transaction (customer_name, bank_name, contact, voucher_image) VALUES ('$name', '$bank_name', '$contact', '$file');";
							$result=mysqli_query($conn,$sql);
							
							if($result){
								move_uploaded_file($_FILES["photo"]["tmp_name"], "../upload/" . $_FILES["photo"]["name"]);
								echo '<script> alert("Success Dabase Insertion ! Your file was uploaded successfully.")</script>;';
								header('Location:../home.php');
						
							}
								
								
							else
								echo '<script> alert("Error.")</script>;';

						
						
					}
				}
 
		else{
			echo "Error: " . $_FILES["photo"]["error"];
		}

	}
}
?>