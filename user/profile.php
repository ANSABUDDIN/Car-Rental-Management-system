<?php
include('header.php');
include('../config.php');
$id = $_SESSION['user']['id'];

$sql = mysqli_query($con, "select * from users where id='$id'");
foreach ($sql as $getvalue) {
    $first_name = $getvalue['first_name'];
    $last_name = $getvalue['last_name'];
    $phone_number = $getvalue['phonenum'];
    $profile_img = $getvalue['profile_img'];
?>


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- start row -->
            <form method="post" action="profile_db.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-widgets py-3">

                                    <div class="text-center">
                                        <div class="">
                                            <label>
                                                <input type="file" name="profile_img" class="d-none">
                                                <!-- <img src="../assets/images/404.png" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle"> -->
                                                
                                                <?php

                                                if ($profile_img == "") {
                                                ?>
                                                   
                                                    <img src="../assets/images/pro-avtar.webp" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                                <?php
                                                } else {
                                                ?>
                                                <img src="<?php echo $profile_img; ?>" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                                <?php
                                                }
                                                ?>
                                                <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="mt-3 ">
                                            <a href="#" class="text-dark fw-medium font-size-16"><?php echo $_SESSION['user']['username']; ?></a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Personal Information</h5>


                                <div class="mt-3">
                                    <p class="font-size-12 text-muted mb-1">Email Address</p>
                                    <h6 class=""><?php echo $_SESSION['user']['email']; ?></h6>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-12 text-muted mb-1">Phone number</p>
                                    <h6 class=""><?php echo $_SESSION['user']['phonenum']; ?></h6>
                                </div>

                                <div class="mt-3">
                                    <p class="font-size-12 text-muted mb-1">Office Address</p>
                                    <h6 class=""> <?php echo $_SESSION['user']['address']; ?>
                                    </h6>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 col-xl-9">
                    <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Active Bookings  </p>
                                    <h4>

                                        <?php
                                        $movies = mysqli_query($con, "select * from bookings where status=1 AND user_id='$id'  ");
                                        echo mysqli_num_rows($movies);
                                        ?>



                                    </h4>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0"><span class="badge badge-soft-success me-2"> Active Bookings</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Pending Bookings</p>
                                    <h4>
                                        <?php
                                        $movies = mysqli_query($con, "select * from bookings where status=0 AND user_id='$id'  ");
                                        echo mysqli_num_rows($movies);
                                        ?>
                                    </h4>
                                </div>
                            </div>

                        </div>
                        <p class="mb-0"><span class="badge badge-soft-warning me-2"> Pending Bookings </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Total Bookings</p>
                                    <h4>

                                    <?php
                                        $movies = mysqli_query($con, "select * from bookings where user_id='$id'");
                                        echo mysqli_num_rows($movies);
                                        ?>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <p class="mb-0"><span class="badge badge-soft-primary me-2"> Total Bookings </span>
                        </p>
                    </div>
                </div>
            </div>

        </div>

                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <?php if (isset($_SESSION['message'])) { ?>
                                        <div class="alert alert-success">
                                            <button type="button" class="close btn-success rounded-pill d-none" data-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Oh snap! </strong><?php echo @$_SESSION['message'];
                                                                        unset($_SESSION['message']); ?>
                                        </div>
                                    <?php } ?>
                                    <div>
                                        <?php if (isset($_SESSION['fail'])) { ?>
                                            <div class="alert alert-danger">
                                                <button type="button" class="close btn-danger rounded-pill d-none" data-dismiss="alert" aria-hidden="true">×</button>
                                                <strong>Oh snap! </strong><?php echo @$_SESSION['fail'];
                                                                            unset($_SESSION['fail']); ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" value="<?php echo $first_name ?>" name="first_name" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="lastname">Last Name</label>
                                                <input type="text" class="form-control" id="lastname"
                                                    placeholder="Enter last name">
                                            </div>
                                        </div>  -->
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Last Name</label>
                                            <input type="text" class="form-control" value="<?php echo $last_name; ?>" id="useremail" name="last_name" placeholder="Enter email">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-0">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $phone_number; ?>" placeholder="Enter Phone Number">
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <input type="hidden" name="user-id" value="<?php echo $_SESSION['user']['id']; ?>" id="useremail" placeholder="Enter email">

                                <input value="update" type="submit" name="edit" class="btn mt-2 btn-success waves-effect waves-light"></input>
                            </div>
                        </div>

                        <!-- <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Deposits</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Billing Name</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col" colspan="2">Payment Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        21/01/2020
                                                    </td>
                                                    <td>Werner Berlin</td>
                                                    <td>$ 125</td>
                                                    <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                                    </td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>16/01/2020</td>

                                                    <td>Robert Jordan</td>
                                                    <td>$ 118</td>
                                                    <td><span
                                                            class="badge badge-soft-danger font-size-12">Chargeback</span>
                                                    </td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>17/01/2020</td>

                                                    <td>Daniel Finch</td>
                                                    <td>$ 115</td>
                                                    <td><span class="badge badge-soft-success font-size-12">Paid</span>
                                                    </td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>18/01/2020</td>

                                                    <td>James Hawkins</td>
                                                    <td>$ 121</td>
                                                    <td><span
                                                            class="badge badge-soft-warning font-size-12">Refund</span>
                                                    </td>
                                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-3">
                                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                    </div>

                    <!-- end row -->

                </div>
            </form>

            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Car Rental.
                        </div>
                        <div class="col-sm-6">
                            <!-- <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div> -->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->


<?php
}
include('footer.php');
?>