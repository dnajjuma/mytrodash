<?php
include('security.php');
//session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');


?>
<div class="container">
    <!-- <h2 align="center" class="mb-4" style="padding-top:15px; padding-bottom:20px"> PARTICIPANTS </h2> -->


    <div class="table-responsive">

        <?php

        $query = "SELECT * FROM tbl_user";
        $query_run = mysqli_query($connection, $query);
        $counter = 1;
        ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="index.php" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Member</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Profile</h1>
                        <div class="col-6">

                        </div>
                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <center class="m-t-30"> <img src="assets/images/users/dee.jpg" class="rounded-circle" width="150" />
                                        <h4 class="card-title m-t-10">
                                            <?php
                                            echo $firstname . " " . $lastname;
                                            ?>
                                        </h4>
                                        <h6 class="card-subtitle">Trade Representation Officer</h6>

                                    </center>
                                </div>
                                <div>
                                    <hr>
                                </div>

                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal form-material mx-2">
                                        <div class="form-group">
                                            <label class="col-md-12"><b>Full Name:</b> <?php echo $firstname . " " . $lastname; ?></label>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12"><b>Email:</b> <?php echo $email; ?></label>

                                        </div>
                  
                                       


                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>

                </div>


            </div>

        </div>


        <?php
        include('includes/scripts.php');
        include('includes/footer.php');
        ?>