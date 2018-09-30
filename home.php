<?php 
    session_start();
    if(!isset($_SESSION['id']))
        header("location: index.php");

?>

<?php include "./controller/connection.php" ?>
<?php include 'navigation_header.php'?>


<div class="container">
    <div class="row">
    <div class="col-md-2 col-lg-2">

    </div>

    <div class="col-md-8 col-sm-12 col-lg-8">
    <h1>
    </h1>


  <div class="row">
  <div class="col-md-8">
        <div class="form-group">
        <label for="location">Select branch to view exchange rates:</label>

        <select class="form-control" id="location">
        <!-- <option default >Choose a location to view the exchange rates.</option> -->
            <?php 

                $fetch_branch_query = "SELECT * FROM branch";
                $result = mysqli_query($conn,$fetch_branch_query);
                while($res=mysqli_fetch_assoc($result)) {


            ?>

            
            <option value=<?php echo $res['id'] ?> ><?php echo $res['name'] ?> (<?php echo $res['address'] ?> )</option>
            
                <?php } ?>
        </select>
        </div>




        <div class="forex-table" id="forex-table" >


        
        <h1>Forex Table </h1>


        </div>

</div>


<div class="col-md-4" >
    <a class='btn btn-success' id='checkout-btn' href='checkout.php' >Check Out</a>
    <div  id='cart-table'>



    </div>

</div<



    </div>



    <div class="col-md-2 col-lg-2">




    </div>



    </div>



</div>



<script>


$(document).ready(function() {
    var defaultOption = $('#location option:selected').val();
$("#forex-table").load('get_forex_rates.php?branch_id='+defaultOption);
$("#cart-table").load('cart_items.php');
setInterval(()=> {$("#cart-table").load('cart_items.php')}, 500);


});




$("#location").change(function(){
    $("#forex-table").load('get_forex_rates.php?branch_id='+$(this).val());
    $("#cart-table").load('cart_items.php');


});



</script>
