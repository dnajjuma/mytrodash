<?php 
include('security.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/navbar.php');
?>
  
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <h3><b>T.R.O</b></h3>
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Welcome to</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Community Fund Advisor</h1> 
                    </div>
                    <div class="col-6">
                        <div class="text-end upgrade-btn">
                            
                                <button onClick="window.location.reload();" class="btn btn-primary text-white">Refresh</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                
                
                   <!-- Content Row -->
                   <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-sm-3 mb-4" style="height: 110px;">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        VSLAs</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php
                            require 'database/dbconfig.php';
                            $query = "SELECT id FROM tbl_vsla ORDER BY id";
                            $query_run = mysqli_query($connection,$query);

                            $row = mysqli_num_rows($query_run);
                            echo '<h4>'.$row.'</h4>';
                        ?>


                    </div>
                </div>
        <div class="col-auto">
                 <i class="fas fa-key fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-3 col-sm-3 mb-4" style="height: 110px;">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                         Chairpersons</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php
                            require 'database/dbconfig.php';
                            $query = "SELECT id FROM tbl_chairperson ORDER BY id";
                            $query_run = mysqli_query($connection,$query);

                            $row = mysqli_num_rows($query_run);
                            echo '<h4> '.$row.'</h4>';
                        ?>


                    </div>
                </div>
       <div class="col-auto">
                 <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-sm-3 mb-4" style="height: 110px;">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Members</div>
                        <?php
                            require 'database/dbconfig.php';
                            $query = "SELECT id FROM tbl_member ORDER BY id";
                            $query_run = mysqli_query($connection,$query);

                            $row = mysqli_num_rows($query_run);
                            echo '<div class="h5 mb-0 font-weight-bold text-gray-800"><h3>'.$row.'</h3></div>';
                        ?>
                    
                </div>
                <div class="col-auto">
                
                    <i class="fas fa-users fa-2x text-gray-300"></i>
               
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-sm-3 mb-4" style="height: 110px;">
    <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        LOANS </div>
                        <?php
                            require 'database/dbconfig.php';
                            $query = "SELECT id FROM tbl_loan ORDER BY id";
                            $query_run = mysqli_query($connection,$query);

                            $row = mysqli_num_rows($query_run);
                            echo '<div class="h5 mb-0 font-weight-bold text-gray-800"><h3>'.$row.'</h3></div>';
                        ?>
                    
                </div>
                <div class="col-auto">
                
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
               
                </div>
            </div>
        </div>
    </div>
</div>


</div>



<!-- Content Row -->
<!-- Content Row -->
<div class="row">
<?php
$con = mysqli_connect('localhost','root','','db_cfaax');
?>

<!DOCTYPE HTML>
                <html>
                <head>
                <meta charset="utf-8">
                <title>CFA</title>
                <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script type="text/javascript">
                google.load("visualization", "1", {packages:["corechart"]});
                google.setOnLoadCallback(drawChart);
                function drawChart() {
                var data = google.visualization.arrayToDataTable([

                ['VSLA','No. of Members'],
                <?php 
                                        $query = "SELECT * from tbl_vsla";
                                        $exec = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_array($exec)){
                                        echo "['".$row['vslaName']."',".$row['capacity']."],";
                                        }
                                    ?>

                ]);

                var options = {
                // title: 'EVENT SUMMARY',
                pieHole: 0.4,
                        pieSliceTextStyle: {
                        color: 'black',
                        },
                        legend: 'none'
                };
                var chart = new google.visualization.PieChart(document.getElementById("columnchart12"));
                chart.draw(data,options);
                }
                
                </script>
                
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages':['imagebarchart'],
                        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
                    });
                    google.charts.setOnLoadCallback(drawRegionsMap);

                    function drawRegionsMap() {
                        var data = google.visualization.arrayToDataTable([
                            ['VSLA', 'No. of Members'],
                            <?php
                                $chartQuery = "SELECT * FROM tbl_vsla";
                                $chartQueryRecords = mysqli_query($con,$chartQuery);
                                while($row = mysqli_fetch_assoc($chartQueryRecords)){
                                    echo "['".$row['vslaName']."',".$row['capacity']."],";
                                }
                            ?>
                        ]);

                        var options = {
                        
                        };

                        var chart = new google.visualization.ImageBarChart(document.getElementById('regions_div'));

                        chart.draw(data, options);
                    }
                    </script>

                </head>

                <body>
               
                    <div>
                                        <h4 class="card-title">VSLA Summary</h4>
                                        <!-- <h6 class="card-subtitle">Ample admin Vs Pixel admin</h6> -->
                                    </div>
                        <div id="columnchart12" style="width: 400px; height: 350px; ">
                        
                        </div>
                    </div>

                   
            </div>
        </div>

        ?>
 	<div class="container">
        <!-- <h2 align="center" class="mb-4" style="padding-bottom:15px; padding-bottom:20px"> ORGANIZERS </h2> -->
 	<?php	 
 	if (isset($_POST['deletebtn'])) {
	$id = $_POST['delete_id'];

	$query = "DELETE FROM tbl_vsla WHERE id=".$id;
	$result = mysqli_query($connection,$query);

	if ($result) 
	{
		echo "<div class='alert alert-success'>VSLA DELETED</div>";

	}else{
		echo "<div class='alert alert-danger'>VSLA NOT deleted</div>";

	}
}

?>
 		<div class="table-responsive">
            
            <?php
               
                $query = "SELECT * FROM tbl_vsla";
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
                              <li class="breadcrumb-item active" aria-current="page">View</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">VSLAs</h1> 
                       
                    </div>
                    <div class="col-6">
                        <!-- <div class="text-end upgrade-btn">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vslaModal">
                                ADD
                                </button>
                            <a href="report2.php" class="btn btn-secondary text-white"
                                target="_blank">Print report</a>
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#partModal"> ADD </button> -->
                                
                            <!-- </div> --> 
                    </div>
                </div>
            </div>

        <div class="container-fluid">
                
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                               
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                        <th>#</th>
                        <!-- <th> Image </th> -->
                        <th> VSLA </th>
                        <th> Capacity </th>
                        <th> Location </th>
                        <th> Chairperson </th>
                        <th> Status </th>
                        <th> Meeting </th>
                        <!-- <th> EDIT </th>
                        <th> DELETE </th> -->
                    </tr>
                </thead>
                <tbody>

                <?php
                    if(mysqli_num_rows($query_run) > 0) 
                    {
                        while ($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                    <tr>
                        <td><?php echo $counter ?></td>
                        <!-- <td><img src="../picture/ style="width: 200px; height: 200px;"></td> -->
                        <td><?php echo $row['vslaName']; ?></td>
                        <td><?php echo $row['capacity']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['chairperson']; ?></td>
                        <td> <button class="btn-success" style="border-radius: 10%; height: 25px; font-size: 12px">
                        <?php echo $row['status']; ?></button></td>
                        <td><?php echo $row['meeting']; ?></td>
       
                        <!-- <td>
                            <form action="edit_vsla.php" method="POST">                             
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">    
                            <button type="submit" name="editbtn" class="btn btn-link" > 
                            <i class="m-r-10 mdi mdi-border-color"></i>
                            </button>
                            </form>
                        </td>
                        <td>
                            <form action="view_vsla.php" method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="deletebtn" class="btn btn-link">
                                    <i style="color: maroon !important; cursor:pointer !important;" type="submit" name="deletebtn" class="fas fa-fw fa-trash"></i>
                                    </button>
                            </form>
                        </td> -->


                    </tr>
                    

                    <?php
                        $counter++;}

                    }
                    else{
                        echo "no record found";
                    }                                                                                          
                    ?>
                </tbody>
            </table>
            <div class="modal fade" id="vslaModal" role="dialog" aria-labelledby="exampleModalLabel" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> ADD NEW VSLA </h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                        <form style="color:black !important;" action="new_vsla.php" class="mb-4" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <!-- <label><b>VSLA</b></label> -->
                                <input type="text" name="vslaName" class="form-control" placeholder="VSLA Name" required>
                            </div>
                            <div class="form-group">
                                <!-- <label><b>Role</b></label> -->
                                <input type="number" name="capacity" class="form-control" placeholder="Capacity" required>
                            </div>
                            <div class="form-group">
                            <select name="location" placeholder="Location" class="form-control" required>
                                <option value="">Select Division</option>
                                <?php 
                                $query ="SELECT division FROM tbl_division";
                                $query_run = $connection->query($query);
                                if($query_run->num_rows> 0){
                                    while($optionData=$query_run->fetch_assoc()){
                                    $option =$optionData['division'];
                                ?>
                                <?php
                                //selected option
                                if(!empty($name) && $name== $option){
                                // selected option
                                ?>
                                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                                <?php 
                            continue;
                            }?>
                                <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                            <?php
                                }}
                                ?>
                            </select>
                            </div>
                            <div class="form-group">
                            <select name="chairperson" placeholder="Chairperson" class="form-control" required>
                                <option value="">Select Chairperson</option>
                                <?php 
                                $query ="SELECT name FROM tbl_chairperson";
                                $query_run = $connection->query($query);
                                if($query_run->num_rows> 0){
                                    while($optionData=$query_run->fetch_assoc()){
                                    $option =$optionData['name'];
                                ?>
                                <?php
                                //selected option
                                if(!empty($name) && $name== $option){
                                // selected option
                                ?>
                                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                                <?php 
                            continue;
                            }?>
                                <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                            <?php
                                }}
                                ?>
                            </select>
                            </div>
                            <div class="form-group">
                            <select name="status"  class="form-control" required>
                                <option value="">Status</option>
                                <?php 
                                $query ="SELECT status FROM tbl_status";
                                $query_run = $connection->query($query);
                                if($query_run->num_rows> 0){
                                    while($optionData=$query_run->fetch_assoc()){
                                    $option =$optionData['status'];
                                ?>
                                <?php
                                //selected option
                                if(!empty($name) && $name== $option){
                                // selected option
                                ?>
                                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                                <?php 
                            continue;
                            }?>
                                <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
                            <?php
                                }}
                                ?>
                            </select>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="text" name="meeting" class="form-control" placeholder="Meeting" required>
                            </div>

                            <input type="submit" name="add" class="btn btn-success" value="Add" style="float: right; width: 100px;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
 	</div>

 

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
            
    
