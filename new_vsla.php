<?php 
include('security.php');
include('includes/header.php');
include('includes/navbar.php'); 
include('includes/topbar.php');

?>

    <div class="container">
        <h3 style="color:black !important;" align="center" class="mb-4">Add New VSLA</h3>
 <?php 
    if (isset($_POST['add'])) {

    $vsla = $_POST['vslaName'];
    $capacity = $_POST['capacity'];
    $location = $_POST['location'];
    $chairperson = $_POST['chairperson'];
    $status = $_POST['status'];
    $meeting = $_POST['meeting'];
    $activity = $_POST['activity'];
    $males = $_POST['males'];
    $females = $_POST['females'];
    $savings = $_POST['savings'];
    $averageage = $_POST['averageage'];
    $creditunit = $_POST['creditunit'];
    $rateofLending = $_POST['rateofLending'];
    $year = $_POST['year'];
    $shareouts = $_POST['shareouts'];
  
    
    $query = "INSERT INTO tbl_vsla (`vslaName`,`capacity`,`location`,`chairperson`,`status`,`meeting`,`activity`,`males`,`females`,`savings`,`averageage`,`creditunit`,`rateofLending`,`year`,`shareouts`) VALUES ('$vsla','$capacity','$location','$chairperson','$status','$meeting','$activity','$males','$females','$savings','$averageage','$creditunit','$rateofLending','$year','$shareouts')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
		$_SESSION['success'] = "<div class='alert alert-success'>VSLA has been registered successfully</div>";
		header('Location: view_vsla.php');
	}else{
		$_SESSION['status'] = "<div class='alert alert-danger'>Sorry! VSLA could NOT be added</div>";
		header('Location: view_vsla.php');
	}

   
    }
    
?>
        
    </div>
    

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>    