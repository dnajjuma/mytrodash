<?php

$server_name = "MyClearDBMaster";
$db_username ="bd69a3fabc0cd6";
$db_password = "2a71728d";
$db_name = "heroku_d66c949e1e66b1b";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{
    //echo "database connected";
}else
{
    echo '
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mr-auto ml-auto text-center py-5 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title bg-danger text-white">
                                    Database connection failed
                                </h1>
                                <h2 class="card-title">Database failure</h2>
                                <p class="card-text">Please check your database connection</p>
                                <a href="index.php" class="btn btn-primary"> Go back to home page </a>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
    ';
}


?>