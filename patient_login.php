<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-fluid">
   <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image1"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Patient Login</h3>

              <form action="patient_dashboard.php" method="POST">
                  <div class="form-label-group">
                      <input type="text" id="idNumber" class="form-control" name="id"required>
                      <label for="idNumber">ID No</label>
                    </div>
                  <div class="form-label-group">
                    <input type="password" id="password" class="form-control" name="pswd" required>
                    <label for="password">Password</label>
                  </div>
                <!--div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="termsCondition">
                    <label class="custom-control-label" for="customCheck1"><a class="small" href="partient_terms&condition.html">Terms and Condition</a></label>
                  </div-->
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" id="login" name="login">Log In</button>
                <div class="font">
                <a class="small" href="forgot_password.php"><strong><center>Forgot password?</center></strong></a></div>
                <center><p>Don't have an account? <a class="small" href="patient_register.php"><strong>Sign up</strong></a></p></center>                    
              </form>
            </div>
          </div>
        </div>
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