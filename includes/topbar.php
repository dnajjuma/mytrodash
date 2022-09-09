
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                   
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- DASHBOARD -->
                            
                            <img src="assets/images/logo-cf2.png" alt="homepage" style="width: 38px;" />
                        </b> <b>DASHDBOARD</b> 
                        <!--End Logo icon -->
                       
                    </a>
                    
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
               
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <ul class="navbar-nav float-start me-auto">
                    
                    </ul>
                    
                    <ul class="navbar-nav float-end">
                        
                    
                        <li class="nav-item dropdown">
                        
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <h5 class="text-gray-600 small" style="color: grey; font-size: 16px;" >
                            <b>
                            <?php
                                echo $firstname ." ". $lastname ;
                            ?>
                            </b>
                               
                            </h5>&nbsp;&nbsp;
                            <img src="assets/images/users/dee.jpg" alt="user" class="rounded-circle" width="31" height="35">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                           
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                Logout
                                </button>
                                   
                            </ul>
                        </li>
                       
                    </ul>
                </div>
                
            </nav>
        </header>
        
  