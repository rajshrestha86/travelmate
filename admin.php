<<<<<<< HEAD
<?php 
    session_start();
    if(!isset($_SESSION['username']))
        header('location: admin-login.php');

    $title="Admin";
    $selected="dashboard";
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
                    <h1 class="page-header">Dashboard </h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            <p>This is dashboard. Here we include charts and graphs and statistics.</p>

        </div>
    </div>

</div>

<?php include 'footer.php';?>




=======
<?php 
    session_start();
    if(!isset($_SESSION['username']))
        header('location: admin-login.php');

    $title="Admin";
    $selected="dashboard";
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
                    <h1 class="page-header">Dashboard </h1>
                </div>
            </div>

            <div class="row-lg-12">
                <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Sales This week</div>
                                
                                <div class="panel-body">
                                    <div id="morris-donut-chart"></div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                </div>

                <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Sales Today</div>
                                
                                <div class="panel-body">
                                    <div id="morris-donut-chart2"></div>
                                </div>
                            </div>
                            
                        </div>
                </div>


                <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Sales Today</div>
                                
                                <div class="panel-body">
                                    <div id="morris-area-chart"></div>
                                </div>
                            </div>
                            
                        </div>
                </div>

            </div>

                      
           

        </div>
    </div>

</div>

<?php include 'footer.php';?>




>>>>>>> f765383d0bd7046f34c5b28db568b38b79e019e7
