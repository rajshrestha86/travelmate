<?php 
session_start();
$title="Branch Transaction";
//$selected="transaction";
include 'header.php';
?>

<div id="wrapper">

    <!-- Navigation -->

    <?php require 'navigation_staff.php';?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Branch-Branch Transaction </h1>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Amount</th>
                                        <th>Timestamp</th>
                                        <th>Staff</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include './controller/connection.php';



                                    $sql="SELECT sender.name as sender,receiver.name as receiver,amount,timestamp,staff from b2b_transaction AS T JOIN branch AS sender JOIN branch AS receiver ON T.from=sender.id AND T.to=receiver.id ORDER BY timestamp DESC";
                                    $result=mysqli_query($conn,$sql);
                                    $count = 1;
                                    while($row = mysqli_fetch_assoc($result)) {

                                        ?>

                                       


                                        <tr>
                                            <td><?php echo  $count ?></td>        
                                            <td><?php echo  $row["sender"]?></td>
                                            <td><?php echo  $row["receiver"]?></td>
                                            <td><?php echo  $row["amount"]?></td>
                                            <td><?php echo  $row["timestamp"]?></td>
                                            <td><?php echo  $row["staff"]?></td>
                                            
                                            

                                        </tr>


                                        <?php 
                                        $count=$count+1;
                                    }
                                    ?>
                                </tbody>
                            </table>
                    </div>
                </div>

            </div>                        
        </div>
    </div>
</div>




<?php include 'footer.php';?>




