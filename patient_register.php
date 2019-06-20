<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
            // Displays alert message
            function alert($msg)
            {
                echo "<script> alert($msg) </script>";
            }

            // Check if REGISTER button is clicked
            if(isset($_POST['register']))
            {
                try
                {
                    // Connect to database
                    $connStr = mysqli_connect("localhost", "root", "", "doctors_db");
                    if($connStr)
                    {
                        // Retrieve patient form data
                        $pFirstName = $_POST['pFirstName'];
                        $pLastName = $_POST['pLastName'];
                        $pID = $_POST['pID'];
                        $pEmail = $_POST['pEmail'];
                        $pCell = $_POST['pCell'];
                        $pSOS = $_POST['pSOS'];
                        $pAddr1 = $_POST['pAddr1'];
                        $pCity = $_POST['pCity'];
                        // Get guarantor data
                        $gFirstName = $_POST['gFirstName'];
                        $gLastName = $_POST['gLastName'];
                        $gID = $_POST['gID'];
                        $gCell = $_POST['gCell'];
                        $gAddr = $_POST['gAddr'];
                        $gCity = $_POST['gCity'];
                        // Get insurance data
                        $iTypePlan = $_POST['iTypePlan'];
                        $insurer = $_POST['insurer'];
                        $policyID = $_POST['policyID'];
                        $iCell = $_POST['iCell'];

                        // Query string
                        $query = "INSERT INTO users (pFstName,pLstName,pID
                                                    ,pCellNum,pAddr1,pCity,pEmail
                                                    ,pSOSNum,gFstName,gLstName,gID
                                                    ,gCellNum,gAddr,gCity,iPlanType
                                                    ,iInsurer,iPlcyID,iContacts) 
                                              VALUES('$pFirstName','$pLastName','$pID'
                                                    ,'$pCell','$pAddr1','$pCity','$pEmail'
                                                    ,'$pSOS','$gFirstName','$gLastName'
                                                    ,'$gID','$gCell','$gAddr','$gCity'
                                                    ,'$iTypePlan','$insurer','$policyID','$iCell');";
                        // Upon registering, the system automatically creates user profile for new user      
                        $query .= "INSERT INTO patient_profile (idNum,fst_name,lst_name
                                                              ,pswd,cel_num,email)
                                              VALUE ('$pID','$pFirstName','$pLastName'
                                              ,'$policyID','$pCell','$pEmail');"; 
                                            
                        if(mysqli_multi_query($connStr, $query) == TRUE)
                        {
                            // Display modal and redirect to patient login
                            echo "<script>
                                  // Show alert after successful registration
                                  alert(\"Thank you for registering.\");
                                
                                  // Redirecting to patient_login.php
                                  window.location.href = 'patient_login.php';
                                  </script>";
                        }
                        else
                        {
                            echo "<script> alert(\"Some internal error has occured.\nPlease register later.\"); </script>";
                        }
                    } 
                }
                catch(Exception $ex)
                {
                    // Alert exception
                    alert('Exception: ' . $ex->getMessage());
                }
                finally
                {
                    // Close database
                    mysqli_close($connStr);
                }
            }
        ?>
          <!--- Form -->
       <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">

                <center><h2>PATIENT REGISTRATION FORM </h2></center>
                <center><p><strong>Patient Information</strong></p></center>
                                 
                <form id="contact-form" method="POST" action="#" role="form">
                    <div class="messages">
                    <div class="controls">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="pFirstName" class="form-control" placeholder="First Name" required="required"
                                        data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_lastname" type="text" name="pLastName" class="form-control" placeholder="Last Name" required="required"
                                        data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_email" type="text" name="pID" class="form-control" placeholder="ID" required="required"
                                        data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_phone" type="tel" name="pCell" class="form-control" placeholder="Cellphone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_address" type="address" name="pAddr1" class="form-control" placeholder="Address 1" required="required"
                                        data-error="Valid address is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_phone" type="text" name="pCity" class="form-control" placeholder="City">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_address" type="email" name="pEmail" class="form-control" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input id="form_phone" type="tel" name="pSOS" class="form-control" placeholder="Emergency Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
       <!--Responsible for the bill-->
       <center><p><strong>Guarantor Information</strong></p></center>                    
        <div class="messages">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_name" type="text" name="gFirstName" class="form-control" placeholder="First Name" required="required"
                                data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_lastname" type="text" name="gLastName" class="form-control" placeholder="Last Name" required="required"
                                data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_id" type="text" name="gID" class="form-control" placeholder="ID Number" required="required"
                                data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_phone" type="tel" name="gCell" class="form-control" placeholder="Cellphone Number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_address" type="address" name="gAddr" class="form-control" placeholder="Address" required="required"
                                data-error="Valid address is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_phone" type="tel" name="gCity" class="form-control" placeholder="City">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
 </div>
</div>          
         <!--Medical aid details-->
  <center><p><strong>Insurance Infomation</strong></p></center>                    
            <div class="messages">

                   <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_name" type="text" name="iTypePlan" class="form-control" placeholder="Type of Plan" required="required"
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
                            <input id="form_policyId" type="text" name="policyID" class="form-control" placeholder="Policy ID" required="required"
                                data-error="Policy ID is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="form_phone" type="tel" name="iCell" class="form-control" placeholder="Contact Number">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
            </div>

  <!--Terms and conditions -->
  <script>
      // Toggles Register button's enabled attribute
      // Enables register button if Ts&Cs checked, disables otherwise
      function toggleRegister(tc)
      {
          if(tc.checked)
              $("#register").removeAttr("disabled");
          else
              $("#register").attr("disabled", "disabled");
      }
  </script>


  <div class="custom-control custom-checkbox mb-3">
      <input type="checkbox" class="custom-control-input" id="tc" onclick="toggleRegister(this)">
      <label class="custom-control-label" for="tc"><a class="small" href="patient_terms&conditions.html">Terms and Conditions</a></label>
  </div>
  <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" id="register" name="register" disabled>REGISTER</button>
</form>

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
          <a class="btn btn-primary" href="patient_login.php">Logout</a>
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