 <?php include 'header.php' ?>
    

  <?php 
   if($_GET)
   {
       echo 'GET REquest';

   }


if($_POST['quantity']){
   echo 'POST_REQUEST';
}

?>
    
    
    <div class="table-responsive">

    <table class="table">
        <thead>
            <tr>
                <th>Currency</th>
                <th>Selling Rate (AUD)</th>
                <th>Purchase Rate (AUD)</th>
                <th>  </th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                include './controller/connection.php';


            $branch_id=$_GET['branch_id'];
            $sql="SELECT * FROM exchange_rates where branch='$branch_id'";
            $result=mysqli_query($conn,$sql);
            
            $count = 1;
            while($row = mysqli_fetch_assoc($result)) {

                ?>


                <tr>     
                    <td><?php echo  $row["currency"]?></td>
                    <td><?php echo  $row["selling_rate"]?></td>
                    <td><?php echo  $row["purchase_rate"]?></td>
                    <td style="{width: 20px;}">
                    
                    <div class="col form-group">
                            <input type="number" id="quantity-<?php echo $count ?>" style="width: 50px;"/> 
		                    <a class="fa fa-shopping-cart fa-fw" onclick='addtocart(<?php echo $count ?>, <?php echo $branch_id ?>,  "<?php echo  $row["currency"]?>", <?php echo  $row["purchase_rate"]?>)'></a>
                            </div> <!-- form-group end.// -->
                            
                    
                    </td>
                    
                
                    

                </tr>


                <?php 
                $count=$count+1;
            }

            if(mysqli_num_rows($result)==0)
                echo '
                <div class="alert alert-info">
                <strong>Info!</strong> The inventory of current shop is empty please check another shop.
              </div>
                ';
            ?>
            
        </tbody>
    </table>
</div>


<script>
function addtocart(count, branch_id, currency, purchase_rate){
    if($('#quantity-'+count).val()=='')
        {
             alert('Empty Value');
             return;
        }
    console.log($('#quantity-'+count).val()*purchase_rate+'  '+branch_id+' '+currency+' '+purchase_rate);
    $.ajax({

        type: "POST",
        url: "controller/add_cart_item.php",
        async: false,
        data: {"currency": currency, "quantity": $('#quantity-'+count).val(), "exchange_rate": purchase_rate, "branch": branch_id},
        success : function(text)
        {
            console.log(text);
            status = text;
            // alert(status);
        }
    });
}


</script>


