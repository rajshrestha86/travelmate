<?php
    include 'connection.php';
    session_start();

	if($_POST){
        $currency=$_COOKIE['currency_name'];
        $commission=$_POST['commission'];
        $purchasing_rate=$_POST['purchasing_rate'];
        $forex_amount=$_POST['forex_amount'];
        $total_amount=$_POST['total_amount'];
		$pay_to_customer=$_POST['pay_to_customer'];
        $customer_name=$_POST['customer_name'];
        $status=1;
        $branch=$_SESSION['staff_branch'];
        $phone=$_POST['phone'];
        
        

       //echo $from.$to.$amount.$currency;
        mysqli_autocommit($conn,false);
        // By default mysql innoDB has autocommit mode enabled in which every single transactions are immediately committed after execution.
        //So we need to disable that mode in order to save the results till commit. //
        $flag=true;
        $staff=$_SESSION['staff_username'];

        $sql1="UPDATE inventory SET total=total+$forex_amount WHERE name='$currency' AND branch=$branch";
        $sql2="INSERT INTO `b2c_transaction`(`currency`, `commission`, `purchasing_rate`, `forex_amount`, `total`, `pay_to_customer`, `customer_name`, `phone`, `status`, `branch`) VALUES ('$currency','$commission','$purchasing_rate','$forex_amount','$total_amount','$pay_to_customer','$customer_name','$phone','$status','$branch');";

        $result=mysqli_query($conn,$sql1);
        if(!$result){
            $flag=false;
            echo "Error Details: ". mysqli_error($conn);
        }
        $result=mysqli_query($conn,$sql2);
        if(!$result){
            $flag=false;
            echo "Error Details: ".mysqli_error($conn) ;
        }
        if ($flag){
            mysqli_commit($conn);
            echo "<script>alert('Transaction Complete');</script>";
            header('Location: ../B2B_transfer.php');
        }
        else{
            mysqli_rollback($conn);
            echo "Transaction failed. Rolling back transactions...";
        }
        mysqli_close($conn);      
	
    }
    else{
        echo "no post found";
    }
	

?>