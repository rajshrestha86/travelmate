<?php 
session_start();
$title="Sell Forex";
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
                    <h1 class="page-header">POS - Sell Forex </h1>
                </div>
            </div>

            <div class="container">
              <form action="controller/inventory_add.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Currency</label>
                    <div class="col-sm-5">
                                            <select name="stf_branch_in" id="staff_branch_in" class="form-control" required>
                                             <?php
                                                 include './controller/connection.php';



                                                        $sql="SELECT * FROM inventory";
                                                        $result=mysqli_query($conn,$sql);
                                                        $count = 1;
                                                        while($row = mysqli_fetch_assoc($result)) {

                                                ?>
                                                <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>

                                                <?php 
                                                    $count=$count+1;
                                                }
                                                ?>
                                             </select>
                                        </div>
                </div>

                
            
                

            <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Commission(in %)</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="total" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
                    </div>            
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Commission</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="total" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
                    </div>            
                </div>

            <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Selling Rate</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="total" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
                    </div>            
            </div>
            <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Forex Amount</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="total" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
                    </div>            
            </div>

             <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Get from Customer</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="total" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
                    </div>            
            </div>

            <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Total Amount Received</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="total" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
                    </div>            
            </div>

             <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Balance</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="total" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
                    </div>            
            </div>

            <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Customer Full Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="total" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
                    </div>            
            </div>

             <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone number</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="total" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
                    </div>            
            </div>

        <div class="form-group row">
          <div class="offset-sm-3 offset-md-3 col-sm-10">
            <!-- <button class="btn btn-primary" onclick="add_currency()">Register</button> -->
            <input type="submit" value="Add" name="submit">
        </div>
    </div>
</form>
</div>


</div>
</div>

</div>

<?php require 'footer.php';?>




