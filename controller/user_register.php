<?php
    include 'connection.php';
    include 'errors.php';

	if($_POST){
		
        $f_name=mysqli_escape_string($conn, $_POST['f_name']);
        $l_name=mysqli_escape_string($conn,$_POST['l_name']);
        $email=mysqli_escape_string($conn,$_POST['email']);
        $username=mysqli_escape_string($conn,$_POST['username']);
        $password=password_hash($_POST['password'], PASSWORD_BCRYPT);
		$address=mysqli_escape_string($conn,$_POST['address']);
        $contact=mysqli_escape_string($conn,$_POST['contact']);
        
        echo $f_name;
        echo $l_name;
        echo $username;
        echo $address;
        echo $email;
        echo $contact;

        $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['id'] === $username) {
                array_push($errors, "Username already exists");
            }
    
            if ($user['email'] === $email) {
                ChromePhp::log("Email already exists.");
                array_push($errors, "email already exists");
            }
        }

	

            if (count($errors) == 0) {
   
                $sql="INSERT INTO user(fname, lname, address, contactNo, email, username, password) VALUES('$f_name', '$l_name', '$address' ,'$contact', '$email', '$username','$password')";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo "Added new user successfully";
                    header('location: /travelmate/navigation.php');
                }
                else
                    echo "Error occured.";
            }

            include '../register.php';
		
	}
	

?>