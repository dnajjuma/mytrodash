<?php 
include('security.php');
//session_start();
include('includes/header.php');
include('includes/navbar.php'); 
include('includes/topbar.php');

?>
    <!--table-->
    <div class="page-wrapper">
            <div class="page-breadcrumb">
<div class container-fluid>
    <div class="card shadow mb-4">
	    <div class="card-header py-3">
	        <h6 class="m-0 font-weight-bold text-primary"> Make Changes </h6>
	    </div>

	    <div class="card-body">
	    	<?php
	    	$connection = mysqli_connect("localhost","root","","db_cfaax");
	    	if (isset($_POST['editbtn'])) {
				$id = $_POST['edit_id'];
				//echo $id;
				$query = "SELECT * FROM tbl_vsla WHERE id='$id' ";
				$query_run = mysqli_query($connection, $query);

				foreach ($query_run as $row){
					?>
                    <div class="card">
                            <div class="card-body">
                            <h4 class="card-title m-t-10" style="text-align: center" >Edit VSLA's details</h4>
                            <p></p>
                            <form action="code.php" method="POST" class="form-horizontal form-material mx-2"  >
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
              <div class="form-group">
                <!-- <label><b>Participant name</b></label> -->
                <input type="text" name="edit_vslaName" value="<?php echo $row['vslaName']?>" class="form-control" required>
            </div>
            <div class="form-group">
                <!-- <label><b>Parent name</b></label> -->
                <input type="number" name="edit_capacity" value="<?php echo $row['capacity']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Contact</b></label> -->
                <input type="text" name="edit_location" value="<?php echo $row['location']?>" class="form-control" required>
            </div>
            <div class="form-group">
                <!-- <label><b>School</b></label> -->
                <input type="text" name="edit_chairperson" value="<?php echo $row['chairperson']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="text" name="edit_status" value="<?php echo $row['status']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="text" name="edit_meeting" value="<?php echo $row['meeting']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="text" name="edit_activity" value="<?php echo $row['activity']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="number" name="edit_males" value="<?php echo $row['males']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="number" name="edit_females" value="<?php echo $row['females']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="number" name="edit_savings" value="<?php echo $row['savings']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="number" name="edit_averageage" value="<?php echo $row['averageage']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="number" name="edit_creditunit" value="<?php echo $row['creditunit']?>" class="form-control"  required>
            </div>
          
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="text" name="edit_rateofLending" value="<?php echo $row['rateofLending']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="text" name="edit_year" value="<?php echo $row['year']?>" class="form-control"  required>
            </div>
            <div class="form-group">
                <!-- <label><b>Age</b></label> -->
                <input type="number" name="edit_shareouts" value="<?php echo $row['shareouts']?>" class="form-control"  required>
            </div>
          
          
            
            <a href="view_vsla.php" class="btn btn-danger" style="float: right; margin-left:5px;"> CANCEL </a>
			<button type="submit" name="updatebtn7" class="btn btn-primary" style="float: right"> Update </button>
        </form>
	        <?php
				}

			}
			?>
	    </div>
    </div>
</div>





<?php 
include('includes/scripts.php');
include('includes/footer.php');
?> 