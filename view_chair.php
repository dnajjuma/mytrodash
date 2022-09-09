<?php
include('security.php');
//session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/topbar.php');

?>
<div class="container">
    <!-- <h2 align="center" class="mb-4" style="padding-bottom:15px; padding-bottom:20px"> FACILITATORS </h2> -->




    <?php
    if (isset($_POST['deletebtn'])) {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM tbl_chairperson WHERE id=" . $id;
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "<div class='alert alert-success'>Chairperson DELETED</div>";
        } else {
            echo "<div class='alert alert-danger'>Chairperson NOT deleted</div>";
        }
    }

    ?>
    <div class="table-responsive">

        <?php

        $query = "SELECT * FROM tbl_chairperson";
        $query_run = mysqli_query($connection, $query);
        $counter = 1;

        ?>
        <!-- <a  href="new_facilitator.php" class="btn btn-primary" style=" margin-bottom: 20px;" data-toggle="modal" data-target="#facilModal"> ADD </a> -->

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="index.php" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">TRO</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Chairpersons</h1>

                    </div>
                    <div class="col-6">
                        <div class="text-end upgrade-btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chairModal">
                                ADD
                            </button>
                            <a href="report.php" class="btn btn-secondary text-white" target="_blank">Print report</a>
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
                                                <th> Chairperson </th>
                                                <th> Contact </th>
                                                <th> Address </th>
                                                <th> Photo </th>
                                                <th> EDIT </th>
                                                <th> DELETE </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (mysqli_num_rows($query_run) > 0) {
                                                while ($row = mysqli_fetch_assoc($query_run)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $counter ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['contact']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><img width="50" src="uploads/<?= $row['image_url'] ?>"></td>

                                                        <td>
                                                            <form action="edit_chair.php" method="POST">
                                                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                                <button type="submit" name="editbtn" class="btn btn-link">
                                                                    <i class="m-r-10 mdi mdi-border-color"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form action="view_chair.php" method="POST">
                                                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                                <button type="submit" name="deletebtn" class="btn btn-link">
                                                                    <i style="color: maroon !important; cursor:pointer !important;" type="submit" name="deletebtn" class="fas fa-fw fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </td>


                                                    </tr>

                                            <?php
                                                    $counter++;
                                                }
                                            } else {
                                                echo "no record found";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <div class="modal fade" id="chairModal" role="dialog" aria-labelledby="exampleModalLabel" tabindex="-1">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"> ADD NEW CHAIRPERSON </h5>

                                                </div>
                                                <div class="modal-body">
                                                    <form style="color:black !important;" action="new_chair.php" class="mb-4" method="POST" enctype="multipart/form-data">

                                                        <div class="form-group">

                                                            <input type="text" name="name" class="form-control" placeholder="Full name" required>
                                                        </div>
                                                        <div class="form-group">

                                                            <input type="text" name="contact" class="form-control" placeholder="Contact" required>
                                                        </div>
                                                        <div class="form-group">

                                                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                                                        </div>
                                                        <div class="form-group">

                                                            <input type="file" name="my_image" alt="image" class="form-control" placeholder="Photo" required>
                                                        </div>
                                                        <!-- <input type="submit" name="submit" value="Upload"> -->



                                                        <input type="submit" name="addbtn" class="btn btn-success" value="Add" style="float: right; width: 100px;">
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