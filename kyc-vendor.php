<?php
session_start();
include("config.php");
include('header.php');

$id = $_SESSION['vendor']['id'];
$email = $_SESSION['email'];
$role = $_SESSION['role'];

// $check_kyc = mysqli_query($con, "SELECT * FROM `users`
//  WHERE `id`='$id' AND  `status`='1'");
//  if(mysqli_num_rows($check_kyc) == 1)
//  {

//      // unset($_SESSION['email']);
//      // unset($_SESSION['role']);
//      // unset($_SESSION['id']);
//      $_SESSION['msg'] = "Your document is still in under review";
//      header("location:index.php");
//  }

// 
?>
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
<section class="mb-5">
    <div class="container-fluid h-custom">
        <!-- <div class="col-md-9 col-lg-6 col-xl-5 justify-content-center d-flex">
            <img src="assets/images/pickup/car01.png" class="img-fluid" alt="Sample image">
        </div> -->

        <h2 class="kyc-heading">KYC FORM</h2>
        <div class="row justify-content-center pt-4 ">
            <div class="col-lg-6 col-12 border rounded-2 p-3">
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
                <form action="kyc_db.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-outline mb-4 col-6 ">
                            <label class="form-label" for="form3Example3">First Name</label>
                            <input type="text" name="firstName" id="form3Example3" class="form-control form-control-lg" placeholder="Enter First Name" />
                        </div>
                        <div class="col-6">
                            <label class=" form-label" for="form3Example4">Last Name</label>
                            <input type="text" name="lastName" id="form3Example4" class="form-control form-control-lg" placeholder="Enter Last Name" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-outline mb-4 col-6 ">
                            <label class="form-label" for="form3Example3">Age</label>
                            <input type="text" name="age" id="form3Example3" class="form-control form-control-lg" placeholder="Age" />
                        </div>
                        <div class="col-6">
                            <label class=" form-label" for="form3Example4">Address</label>
                            <input type="text" name="address" id="form3Example4" class="form-control form-control-lg" placeholder="Address" />
                        </div>
                    </div>
                    <div class="form-outline  col-6 ">
                        <!-- <label class="form-label" for="form3Example3">Zip Code</label> -->
                        <input type="hidden" name="userId" value="<?php echo $id; ?>" id="form3Example3" class="form-control form-control-lg" placeholder="Zip Code " />
                    </div>
                    <div class="row">
                        <div class="form-outline mb-4 col-6 ">
                            <label class="form-label" for="form3Example3">Zip Code</label>
                            <input type="number" name="zipCode" id="form3Example3" class="form-control form-control-lg" placeholder="Zip Code " />
                        </div>
                        <div class="col-6">
                            <label class=" form-label" for="form3Example4">City</label>
                            <input type="text" name="city" id="form3Example4" class="form-control form-control-lg" placeholder="City" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-outline mb-4 col-12 ">
                            <label class="form-label" for="form3Example3">Phone Number</label>
                            <input type="number" name="phonenum" id="form3Example3" class="form-control form-control-lg" placeholder="Phone Number" />
                        </div>

                    </div>
                   
                        <div>
                            <label class="form-label" for="form3Example3">Driving License Front</label>
                            <input type="file" name="drivingLicenceFront" style="border: none;" id="form3Example4" class="form-control form-control-lg" />
                        </div>

                        <div class="pt-3">
                            <label class="form-label" for="form3Example3">Driving License Back</label>
                            <input type="file" name="drivingLicenceBack" style="border: none;" id="form3Example4" class="form-control form-control-lg" />
                        </div>

                   
                     


                    <div>
                        <label class="form-label" for="form3Example3">Pan/ Adhar Card Front</label>
                        <input type="file" name="adharCardFront" style="border: none;" id="form3Example4" class="form-control form-control-lg" />
                    </div>

                    <div class="pt-3">
                        <label class="form-label" for="form3Example3">Pan/ Adhar Card Back</label>
                        <input type="file" name="adharCardBack" style="border: none;" id="form3Example4" class="form-control form-control-lg" />
                    </div>

                    <div class="field-wrapper terms_condition pt-4">
                        <div class="n-chk d-flex justify-content-start">
                            <label class="new-control new-checkbox checkbox-primary">
                                <input type="checkbox" class="new-control-input">
                                <span class="new-control-indicator "></span><span class="">I agree to the <a href="javascript:void(0);" class="text-decoration-none"> <span class="kyc-color "> terms and conditions </span></a></span>
                            </label>
                        </div>
                    </div>

                    <div class="d-sm-flex justify-content-center pt-4">
                        <div class="field-wrapper">
                            <button type="submit" name="submit" class="btn kyc-btn" value="">Submit Kyc</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


        <!-- <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
        </div>
    </div> -->

</section>

<?php
include('footer.php')
?>