<?php 
    session_start();
    if(!isset($_SESSION['staff_username']))
        header('location: staff-login.php');

    $title="Admin";
    $selected="dashboard";
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
                    <h1 class="page-header">Dashboard </h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            <p>This is dashboard. Here we include charts and graphs and statistics.</p>

        </div>
    </div>

</div>

<?php include 'footer.php';?>




