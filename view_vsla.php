<?php 
include('security.php');
//session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php'); 


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
                              <li class="breadcrumb-item active" aria-current="page">REL</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">VSLAs</h1> 
                       
                    </div>
                    <div class="col-6">
                        <div class="text-end upgrade-btn">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vslaModal">
                                ADD
                                </button>
                            <a href="viewdata.php" class="btn btn-secondary text-white"
                                target="_blank">Print report</a>
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#partModal"> ADD </button> -->
                                
                            </div>
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
                        <th> Activity </th>
                        <th> Males </th>
                        <th> Females </th>
                        <th> Savings </th>
                        <th> Average age </th>
                        <th> Credit Unit </th>
                        <th> Rate of Lending </th>
                        <th> Year </th>
                        <th> Shareouts </th>
                        <th> EDIT </th>
                        <th> DELETE </th>
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
                        <td><?php echo $row['activity']; ?></td>
                        <td><?php echo $row['males']; ?></td>
                        <td><?php echo $row['females']; ?></td>
                        <td><?php echo $row['savings']; ?></td>
                        <td><?php echo $row['averageage']; ?></td>
                        <td><?php echo $row['creditunit']; ?></td>
                        <td><?php echo $row['rateofLending']; ?></td>
                        <td><?php echo $row['year']; ?></td>
                        <td><?php echo $row['shareouts']; ?></td>
       
                        <td>
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
                        </td>


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
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="text" name="location" class="form-control" placeholder="Location" required>
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
                                
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <select name="status" placeholder="Status" class="form-control" required>
                                <option>--select--</option>    
                                <option>ACTIVE</option>
                                    <option style="color: red;">INACTIVE</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="text" name="meeting" class="form-control" placeholder="Meeting" required>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="text" name="activity" class="form-control" placeholder="Activity" required>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="number" name="males" class="form-control" placeholder="No. of males" required>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="number" name="females" class="form-control" placeholder="No. of females" required>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="number" name="savings" class="form-control" placeholder="Savings" required>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="number" name="averageage" class="form-control" placeholder="Average age" required>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="number" name="creditunit" class="form-control" placeholder="Credit Unit of activity" required>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="text" name="rateofLending" class="form-control" placeholder="Rate of Lending" required>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="text" name="year" class="form-control" placeholder="Year" required>
                            </div>
                            <div class="form-group">
                                <!-- <labe><b>Contact</b></labe/l> -->
                                <input type="number" name="shareouts" class="form-control" placeholder="Shareouts" required>
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