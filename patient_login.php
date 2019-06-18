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

<div class="container-fluid">
   <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image1"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Patient Login</h3>

              <form action="router.php" method="POST">
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
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" id="login" name="login">LOGIN</button>
                <div class="font">
                <a class="small" href="forgot--password.html">Forgot password?</a></div>
                  <p><i><strong>You Don't have account</strong></i><a class="small" href="patient_register.php"><strong>    :    Register</strong></a></p>                    
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>