<!DOCTYPE HTML>
                
                
                
                <!-- <div class="row"> -->
                    <div class="col-md-6">
                        <!-- <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center"> -->
                                    
                <!DOCTYPE HTML>
                <html>
                <head>
                <meta charset="utf-8">
                <title>TechJunkGigs</title>
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

                ['Event','No. of VSLAs'],
                <?php 
                                        $query = "SELECT * from tbl_vsla";
                                        $exec = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_array($exec)){
                                        echo "['".$row['event']."',".$row['capacity']."],";
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
                            ['Event', 'Participants'],
                            <?php
                                $chartQuery = "SELECT * FROM events";
                                $chartQueryRecords = mysqli_query($con,$chartQuery);
                                while($row = mysqli_fetch_assoc($chartQueryRecords)){
                                    echo "['".$row['event']."',".$row['pnumber']."],";
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
                                        <h4 class="card-title">Event Summary</h4>
                                        <!-- <h6 class="card-subtitle">Ample admin Vs Pixel admin</h6> -->
                                    </div>
                        <div id="columnchart12" style="width: 400px; height: 350px; ">
                        
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Documents</h4>
                                <h6 class="card-subtitle">Visit google drive</h6>
                                <div class="mt-5 pb-3 d-flex align-items-center">
                                    <a href="https://drive.google.com/file/d/1GXxaeyeigenXeX2_a-iB727jU96b-ylp/view?usp=sharing" class="btn btn-primary btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-comment-multiple-outline fs-4" ></i>
                                    </a>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Meeting1</h5>
                                        <span class="text-muted fs-6">Lubowa</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">02/01/2022</span>
                                    </div>
                                </div>
                               
                                <div class="py-3 d-flex align-items-center">
                                    <a href="https://docs.google.com/document/d/1cL7-nrZeaeH-ifbJ6GI91f-AsJvZvP7-VKib3ML4ipU/edit?usp=sharing" target="_blank" class="btn btn-success btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-comment-multiple-outline text-white fs-4" ></i>
                                    </a>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Meeting3</h5>
                                        <span class="text-muted fs-6">Bweyogerere</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">22/05/2022</span>
                                    </div>
                                </div>

                                <div class="py-3 d-flex align-items-center">
                                    <a href="https://docs.google.com/document/d/1T9-xt9AjNhF3-t1rCz9AxA8fy2MGJAlhSgLY3awhYKk/edit?usp=sharing" target="_blank" class="btn btn-warning btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-star-circle fs-4" ></i>
                                    </a>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Camp Programme</h5>
                                        <!-- <span class="text-muted fs-6">Zoom</span> -->
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">....</span>
                                    </div>
                                </div>
                                <div class="py-3 d-flex align-items-center">
                                    <a href="https://docs.google.com/spreadsheets/d/1b_bb3uFYXKb0Gofw3KZS8YqBPyrX3kP3/edit?usp=sharing&ouid=111979808998700230326&rtpof=true&sd=true" target="_blank" class="btn btn-success btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-comment-multiple-outline text-white fs-4" ></i>
                                    </a>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Budget</h5>
                                        <span class="text-muted fs-6">For the camp</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">2022</span>
                                    </div>
                                </div>
                                <!-- <div class="py-3 d-flex align-items-center">
                                    <span class="btn btn-info btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-diamond fs-4 text-white" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Top Budgets</h5>
                                        <span class="text-muted fs-6">Sunil Joshi</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+15%</span>
                                    </div>
                                </div>

                                <div class="pt-3 d-flex align-items-center">
                                    <span class="btn btn-danger btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-content-duplicate fs-4 text-white" ></i>
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-0 fw-bold">Best Designer</h5>
                                        <span class="text-muted fs-6">Nirav Joshi</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="badge bg-light text-muted">+90%</span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    