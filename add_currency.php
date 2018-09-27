<?php 
$title="Branch Registration";
include 'header.php';
?>

<div id="wrapper">

    <!-- Navigation -->

    <?php require 'navigation.php';?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inventory Management - Add Currency </h1>
                </div>
            </div>

            <div class="container">
              <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Currency Name</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="input_currency_name" placeholder="Enter Currency name here. eg- AUD" required>
                </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Total Amount</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" id="input_currency_amount" placeholder="Enter Amount of Currency Here">
              </div>
            
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Currency Image</label>
              <div class="col-sm-5">
                <input type="file"  id="input_currency_image">
            </div>
            </div>

        <div class="form-group row">
          <div class="offset-sm-3 offset-md-3 col-sm-10">
            <button class="btn btn-primary" onclick="add_currency()">Register</button>
        </div>
    </div>
</form>
</div>


</div>
</div>

</div>

<?php require 'footer.php';?>



