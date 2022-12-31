<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login Boxed | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="../assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/forms/switches.css">
</head>

<body class="form">


    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Log In</h1>
                        <p class="">Log in to your account to continue.</p>
                        <div>
                            <?php if (isset($_SESSION['error'])) { ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close btn-danger rounded-pill" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Oh snap! </strong><?php echo @$_SESSION['error'];
                                                                unset($_SESSION['error']); ?>
                                </div>
                            <?php } ?>
                            <?php if (isset($_SESSION['msg'])) { ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close btn-success rounded-pill" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Oh snap! </strong><?php echo @$_SESSION['msg'];
                                                                unset($_SESSION['msg']); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <form class="text-left" action="login_db.php" method="POST" class="js-validate needs-validation">
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">USERNAME / EMAIL</label>
                                    <i class="fa-solid fa-user "></i>
                                    <input id="username" name="email" type="text" class="form-control" placeholder="e.g JohnDoe@gmail.com">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">PASSWORD</label>
                                        <!-- <a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a> -->
                                    </div>
                                    <i class="fa-solid fa-lock"></i>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> -->
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" name="login" class="btn btn-primary" value="">Log In</button>
                                    </div>
                                </div>
                                <!-- <p class="signup-link">Not registered ? <a href="auth_register_boxed.html">Create an account</a></p> -->

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-2.js"></script>

</body>

</html>