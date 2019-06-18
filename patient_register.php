<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 
  <title>Doctors Record</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">



</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fa fa-heartbeat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Doctors Record</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fa fa-book"></i>
              <span>Medical Record</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Patient File:</h6>
                <a class="collapse-item" href="write-patient_file.html">Write</a>
                <a class="collapse-item" href="utilities-border.html">Read</a>    
              </div>
            </div>
          </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
                <i class="fa fa-sticky-note" aria-hidden="true"></i>
            <span>Prescription</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fa fa-window-close"></i>
          <span>Allergies</span></a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="charts.html">
              <i class="fas fa-history"></i>
              <span>Next Appointment</span></a>
     </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-calendar"></i>
          <span>Calender</span></a>
      </li>
      <hr class="sidebar-divider my-0"><br>
            <!-- Heading -->
            <div class="sidebar-heading">
              Doctors Recomendations
            </div>
      
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                      <i class="fa fa-cart-plus"></i>
                      <span>Diet</span></a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="charts.html">
                          <i class="fa fa-beer"></i>
                          <span>Upstain</span></a>
                      </li>
            <hr class="sidebar-divider my-0"><br>
      <!-- Heading -->
      <div class="sidebar-heading">
        Extras
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
            <a class="nav-link" href="charts.html">
              <i class="fa fa-thumbs-up"></i>
              <span>Advices</span></a>
          </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-heart"></i>
          <span>Healthy Tips</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">GYM</a>
            <a class="collapse-item" href="utilities-border.html">Helthy Advice</a>
            <a class="collapse-item" href="utilities-border.html">Cooking Receipe</a>

          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="partient_terms&condition.html">
          <i class="fas fa-lock"></i>
          <span>Terms & Condition</span></a>
      </li>

      <!-- Nav Item - Tables -->


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
 

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">0</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="partience-login.html" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="data:image/jpeg;base64,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" >
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="patience_profile.html">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="partience-login.html" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
      

          <!-- Page Heading -->
          
          <!--Avatar --> 
          
          <!--- Form -->
       <div class="container">

        <div class="row">

            <div class="col-xl-8 offset-xl-2">

                <h1>PATIENT REGISTRATION FORM </h1>
                <p><i><strong>Patient Information</strong></i></p>
                                 
                <form id="contact-form" method="post" action="contact.php" role="form">

                    <div class="messages">

                    <div class="controls">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="firstName" class="form-control" placeholder="First name" required="required"
                                        data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_lastname" type="text" name="lastName" class="form-control" placeholder="Last Name" required="required"
                                        data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required"
                                        data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="CellPhone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_address" type="address" name="address" class="form-control" placeholder="Address" required="required"
                                        data-error="Valid address is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_phone" type="text" name="city" class="form-control" placeholder="City">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_address" type="address" name="address2" class="form-control" placeholder="Address 2" required="required"
                                        data-error="Valid address is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_phone" type="tel" name="EmergencyPhone" class="form-control" placeholder="Emergency phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<br>

     
       <!--Responsible for the bill-->
        
  
       <br><p><i><strong>Guaranto Information</strong></i></p>                    
        <div class="messages">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_name" type="text" name="firstName" class="form-control" placeholder="First Name" required="required"
                                data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_lastname" type="text" name="lastName" class="form-control" placeholder="Last Name" required="required"
                                data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="ID Number" required="required"
                                data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Cellphone Number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_address" type="address" name="address" class="form-control" placeholder="Address" required="required"
                                data-error="Valid address is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="City">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
 </div>
</div>          
         <!--Medical aid details-->
  <br><p><i><strong>Insurance Infomation</strong></i></p>                    
            <div class="messages">

                   <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_name" type="text" name="typePlan" class="form-control" placeholder="Type of Plan" required="required"
                                data-error="type of plan is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_insurer" type="text" name="insurer" class="form-control" placeholder="Insurer" required="required"
                                data-error="Insurer name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_policyId" type="number" name="email" class="form-control" placeholder="Policy ID" required="required"
                                data-error="Policy ID is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Contact Number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
            </div>


  <!--Terms and conditions -->
  
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="termsCondition">
                    <label class="custom-control-label" for="customCheck1"><a class="small" href="partient_terms&condition.html">Terms and Condition</a></label>
                </div>
    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" id="login" name="login">LOGIN</button>


    <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    <!-- End of Content Wrapper -->

  
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="partience-login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
