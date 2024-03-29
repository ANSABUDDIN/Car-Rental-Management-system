<?php
session_start();
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from htmlguru.net/carrent-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 12:21:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="carweb is a modern presentation HTML5 Car Rent template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Car Rent" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>car Cab 01</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.php">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.php">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.php">

    <!-- Custom Font
    ================================================== -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto+Slab:400,700" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/color-schemer.css">

    <!-- RS5.4 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <!-- RS5.4 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">

    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


</head>

<body>


    <!-- ======= Header Modal Area =======-->
    <div class="header-modal-area">
        <!-- Modal Search -->
        <div class="overlay overlay-scale">
            <button type="button" class="overlay-close">&#x2716;</button>
            <div class="overlay__content">
                <form id="search-form" class="search-form outer" action="#" method="post">
                    <div class="input-group">
                        <input type="text" class=" input--full" placeholder="search text here ...">
                    </div>
                    <button class="btn text-uppercase search-button">Search</button>
                </form>
            </div>
        </div>

        <div class="overlay-sidebar">
            <div class="author-area">
                <a href="#" class="closebtn">&times;</a>
                <div class="author-area-content">
                    <div class="login-author">
                        <div class="author-info">
                            <div class="author-image yellow-border">
                                <img src="assets/images/driver/driver-03.png" alt="author-image" />
                            </div><!-- /.author-image -->
                            <div class="author-des">
                                <h4 class="author-name">Mr. Johan Smith</h4>
                                <p class="author-description">Driver</p>
                            </div><!-- /.author-des -->
                        </div><!-- /.author-info -->
                        <div class="author-menu">
                            <ul class="yellow-color">
                                <li><a href="#"><i class="fa fa-user-circle-o"></i> Dashboard</a></li>
                                <!-- <li><a href="#"><i class="fa fa-envelope-open"></i>Your Inbox</a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-location-arrow"></i>Track your car</a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-area-chart"></i>Your Bookings Status</a></li> -->
                                <li><a href="#"><i class="fa fa-automobile"></i> Bookings</a></li>
                                <li><a href="#"><i class="fa fa-archive"></i> Bookings History</a></li>
                                <!-- <li><a href="#"><i class="fa fa-money"></i>Your Deposit - $150.00</a></li> -->
                                <li><a href="#"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                            </ul>
                        </div><!-- /.author-menu -->
                    </div><!-- /.login-author -->
                </div><!-- /.author-area-content -->
            </div><!-- /.author-area -->
        </div><!-- /.overlay-sidebar -->
    </div><!-- /.header-modal-area -->

    <!-- ====== Header Nav Area ====== -->
    <header class="header-nav-area">
        <div class="container">
            <div class="row " style=" display:flex;align-items:center;">
                <div class="col-md-3 col-sm-10 col-xs-10">
                    <div class="site-logo site-logo-2 " style="padding:0px">
                        <a href="index.php">
                            <img src="assets/images/car-logo.png" class="logo" alt="logo" /></a>
                    </div>
                    <div class="mobile-menu-main hidden-md hidden-lg">
                        <div class="menucontent overlaybg"> </div>
                        <div class="menuexpandermain slideRight">
                            <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                <span></span>
                            </a>
                        </div>

                        <!--/.menuexpandermain-->

                        <div id="mobile-main-nav" class="mb-navigation slideLeft">
                            <div class="menu-wrapper">
                                <div id="main-mobile-container" class="menu-content clearfix"></div>
                            </div>
                        </div>
                        <!--/#mobile-main-nav-->
                    </div>
                    <!-- /.logo -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-9 col-sm-2 col-xs-2 pd-right-0 padding__0">
                    <div class="site-logo site-logo-3 " style="padding:0px">
                        <a href="index.php">
                            <img src="assets/images/car-logo.png" class="logo" alt="logo" /></a>
                    </div>
                    <nav class="site-navigation top-navigation nav-style-one">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <ul class="menu-list">
                                    <!-- <li>
                                        <a href="index.php">Home</a>

                                    </li>
                                    <li>
                                        <a href="car-single-page.php">Booking</a>
                                    </li>
                                    <li>
                                        <a href="#">Car-rent</a>

                                    </li> -->
                                    <!-- <li>
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="comming-soon.php">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a href="404.php">404</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li>
                                        <a href="about.php">About</a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog.php">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-single.php">Single Post</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li>
                                        <a href="contact.php">Contact</a>
                                    </li> -->
                                    <li>
                                        <a href="login.php">Login</a>
                                    </li>
                                    <li>
                                        <a href="register.php">Sign Up</a>
                                    </li>
                                    <!-- <li>
                                        <a href="kyc.php">KYC Form</a>
                                    </li> -->
                                </ul> <!-- /.menu-list -->
                            </div> <!-- /.menu-content-->
                        </div> <!-- /.menu-wrapper -->
                    </nav><!-- /.site-navigation -->
                    <!--Mobile Main Menu-->

                    <!--/.mobile-menu-main-->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.header-bottom-area -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/color-schemer.css">
<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
    }
</style>
<section style="padding:80px 0px; height:max-content;">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5 justify-content-center d-flex mt-4 mt-lg-0">
                <img src="assets/images/pickup/car03.png" class="login-img" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-4 mt-lg-0">
            <div>
                        <?php if (isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close btn-danger rounded-pill" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Oh snap! </strong><?php echo @$_SESSION['error'];
                                                            unset($_SESSION['error']); ?>
                            </div>
                        <?php } ?>
                    </div>
                <form action="register_db.php" method="post" enctype="multipart/form-data" >
          
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" id="form3Example3" class="form-control form-control-lg" name="email" placeholder="Enter a valid email address" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">User Name</label>
                        <input type="text" id="form3Example4" name="username" class="form-control form-control-lg" placeholder="Enter Your Name" />
                    </div>
                    <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Role</label>
                            <select name="role" require class="form-control form-control-lg" id="">
                                <option disabled selected>Select Role</option>
                                <option value="user">user</option>
                                <option value="vendor">vendor</option>
                            </select>
                        </div>
                    <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" name="password" class="form-control form-control-lg" placeholder="Enter password" />
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>
                  
                    </div>

                    <div class="text-center text-lg-start mt-lg-4 mt-0 pt-2">
                        <input type="submit"  class="login-btn btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit" value="Register" />
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php" class="link-danger">Login</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
   
</section>

<?php
include('footer.php');
?>