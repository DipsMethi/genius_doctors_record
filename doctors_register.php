<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="container register-form">
                                <div class="row">
                                    <div class="col-md-6">
                                            <h3 class="login-heading mb-4">Register</h3>
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="ID Number"
                                                    value="" id="idNumber" name="idNumber"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name"
                                                    value="" id="firstName" name="firstName"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Last Name"
                                                    value="" id="lastName" name="lastName"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email"
                                                    value="" id="email" name="email"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Password"
                                                    value="" id="password" name="password"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Cellphone Number"
                                                    value="" id="cellphone" name="cellphone"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Confirm Password"
                                                    value="" id="confirmPassword" name="confirmPassword"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="HPCSA NO:"
                                                    value="" id="hpcsaNo" name="hpcsaNo"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><a class="small" href="terms_and_condition.html">Terms and Condition</a></label>
                                          </div>
                                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" id="login" name="login" type="submit">LOGIN</button>
                                        <a class="small" href="forgot_password.php"><strong><center>Forgot password?</center></strong></a></div>
                                        <center><p>Don't have an account? <a class="small" href="patient_register.php"><strong>Register</strong></a></p></center>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>