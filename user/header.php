<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:../login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Car Renta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png">
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-layout="detached" data-topbar="colored">
    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-end">

                            <div class="dropdown d-inline-block d-lg-none ms-2">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                </div>
                            </div>


                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   
                                    <?php

                                    if ($_SESSION['user']['profile_img'] == "") {
                                    ?>

                                        <img class="rounded-circle avtar-sm header-profile-user" src="../assets/images/pro-avtar.webp" alt="Header Avatar">
                                    <?php
                                    } else {
                                    ?>
                                        <img class="rounded-circle avtar-sm header-profile-user" src="<?php echo $_SESSION['user']['profile_img']; ?>" alt="Header Avatar">
                                    <?php
                                    }
                                    ?>

                                    <span class="d-none d-xl-inline-block ms-1"><?php echo $_SESSION['user']['email']; ?></span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a class="dropdown-item" href="profile.php"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                                        Profile</a>
                                    <!-- <a class="dropdown-item" href="#"><i
                                            class="bx bx-wallet font-size-16 align-middle me-1"></i> My
                                        Wallet</a> -->
                                    <!-- <a class="dropdown-item d-block" href="#"><span
                                            class="badge bg-success float-end">11</span><i
                                            class="bx bx-wrench font-size-16 align-middle me-1"></i> Settings</a> -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="../logout.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                        Logout</a>
                                </div>
                            </div>

                        </div>
                        <div>
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="/" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-white.png" class="logo" alt="" height="20">
                                    </span>

                                </a>

                                <a href="../index.php" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="../assets/images/car-logo-2.png" alt="" height="30">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="../assets/images/car-logo-2.png" class="w-75" alt="" height="60">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect" id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>

                        </div>

                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="index.php" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <!--                             
                             <li>
                                <a href="profile.php" class=" waves-effect">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    <span>Profile</span>
                                </a>
                            </li> -->

                            <li>
                                <a href="orderlist.php" class=" waves-effect">
                                    <i class="mdi mdi-file-document-box-multiple-outline"></i>
                                    <span>OrderList</span>
                                </a>
                            </li>

                            <li>
                                <a href="history.php" class=" waves-effect">
                                    <i class="mdi mdi-account-cash-outline"></i>
                                    <span>History</span>
                                </a>
                            </li>

                            <!-- <li>
                                <a href="withdraw.php" class=" waves-effect">
                                    <i class="mdi mdi-cash-multiple"></i>
                                    <span>Withdraw</span>
                                </a>
                            </li> -->


                            <!-- <li>
                                <a href="refer.php" class=" waves-effect">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span>Referral</span>
                                </a>
                            </li>

                            <li>
                                <a href="write.php" class=" waves-effect">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span>Write a Review</span>
                                </a>
                            </li> -->



                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->