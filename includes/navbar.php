<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li style="padding-bottom: 30px;">
                                <span class="hide-menu"><h3 style="text-align: center;"><b>T.R.O</b></h3></span></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="view_vsla.php" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">VSLAs</span></a></li>
                    
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="view_chair.php" aria-expanded="false"><i class="mdi mdi-book"></i><span
                                    class="hide-menu">Chairpersons</span></a></li>
                        

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="messaging.php" aria-expanded="false"><i class="mdi mdi-message"></i><span
                                    class="hide-menu">Communicate</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="https://myvslamodel.herokuapp.com/" target="_blank" aria-expanded="false">
                                <i class="mdi mdi-star"></i><span
                                    class="hide-menu">Analysis & Prediction</span></a></li>

                        
                        
                    
                    </ul>
                    

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" role="dialog" aria-labelledby="exampleModalLabel" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Are you sure you want to leave? </h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <!-- <div class="modal-body">
                    <p></p>
                </div> -->
                <div class="modal-footer">
                    <a href="index.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                    
                    <form action="logout.php" method="POST">
                        <button type="submit"  name="logout_btn" class="btn btn-primary">Logout</button>
                    </form>

                    
                </div>
                </div>
            </div>
        </div>