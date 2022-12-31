<style>
    .card {
        margin-bottom: 24px;
        -webkit-box-shadow: 0 0.75rem 1.5rem rgb(18 38 63 / 3%);
        box-shadow: 0 0.75rem 1.5rem rgb(18 38 63 / 3%);
    }

    .badge-soft-primary {
        color: #3b5de7 !important;
        background-color: rgba(59, 93, 231, .18) !important;
    }

    .badge-soft-warning {
        color: #eeb902 !important;
        background-color: rgba(238, 185, 2, .18) !important;
    }

    .badge-soft-success {
        color: #45cb85;
        background-color: rgba(69, 203, 133, .18);
    }

    .badge-soft-danger {
        color: #ff715b;
        background-color: rgba(255, 113, 91, .18);
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
include('./header.php');
include('../config.php');


if (isset($_GET['approve'])) {
    $approveid = $_GET['approve'];
    $result = mysqli_query($con, "UPDATE bookings SET `status`='1' WHERE id='$approveid'");
    $_SESSION['message'] = "Approve Successfully";
}
if (isset($_GET['delete'])) {
    $deleteid = $_GET['delete'];
    $result = mysqli_query($con, "DELETE FROM `bookings` WHERE id='$deleteid'");
    $_SESSION['message'] = "User Delete Successfully";
}




?>

<!--  BEGIN CONTENT AREA  -->

<div id="content" class="main-content">
    <div class="layout-px-spacing">



        <div class="page-header">

        </div>


        <div class="row align-items-center">
            <div class="page-title text-center">
                <h3 class="fw-600"> Change Password</h3>
            </div>
            <div class="col-6 mx-auto" >
                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
                        <strong>Oh snap!</strong> <?php echo @$_SESSION['error'];
                                                    unset($_SESSION['error']); ?>
                    </div>
                <?php }
                if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-success">
                        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
                        <strong>Congrats!</strong> <?php echo @$_SESSION['message'];
                                                    unset($_SESSION['message']); ?>
                    </div>
                <?php } ?>
            </div>
            <form action="change_password_db.php" method="post">
                <div class="col-7 mx-auto">
                    <div class="col-12">
                        <div id="username-field" class="field-wrapper  mt-2 input">
                            <label for="username">Old Password</label>
                            <input id="lastname" name="old_pass" type="password" class="form-control" placeholder="Old Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="username-field" class="field-wrapper mt-2 input">
                            <label for="username">New Password</label>
                            <input id="lastname" name="new_pass" type="password" class="form-control" placeholder="New Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="username-field" class="field-wrapper mt-2 input">
                            <label for="username">Confirm Password</label>
                            <input id="lastname" name="re_pass" type="password" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>
                <div class="text-center my-4">
                    <input value="Change Password" type="submit" name="submit" class="btn btn-primary" />


                </div>
            </form>

        </div>




        <!-- Modal -->
        <div class="modal fade  " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  " role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="exampleModalLabel  ">User Details </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Age</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="lastname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="username-field" class="field-wrapper mt-2 input">
                                    <label for="username">Martial Status</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="lastname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="username-field" class="field-wrapper mt-2 input">
                                    <label for="username">Gender</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="lastname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="username-field" class="field-wrapper mt-2 input">
                                    <label for="username">Address</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="lastname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="username-field" class="field-wrapper mt-2 input">
                                    <label for="username">Zip Code</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="lastname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div id="username-field" class="field-wrapper mt-2 input">
                                    <label for="username">City</label>
                                    <input id="lastname" name="lastname" type="text" class="form-control" placeholder="lastname">
                                </div>
                            </div>

                        </div>







                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>


    </div>
</div>
<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
<?php
include('./footer.php')
?>