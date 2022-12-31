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

if (isset($_GET['blocked'])) {
    $deleteid = $_GET['blocked'];
    $result = mysqli_query($con, "UPDATE users SET `status`='4' WHERE id='$deleteid'");
    $_SESSION['message'] = "Block Successfully";
}
if (isset($_GET['unblocked'])) {
    $deleteid = $_GET['unblocked'];
    $result = mysqli_query($con, "UPDATE users SET `status`='2' WHERE id='$deleteid'");
    $_SESSION['message'] = "UnBlock Successfully";
}

if (isset($_GET['approve'])) {
    $approveid = $_GET['approve'];
    $blank = "";
    $result = mysqli_query($con, "UPDATE users SET `status`='2',`reject_reason`='$blank'  WHERE id='$approveid'");
    $_SESSION['message'] = "Approve Successfully";
}
if (isset($_GET['delete'])) {
    $deleteid = $_GET['delete'];
    $result = mysqli_query($con, "DELETE FROM `users` WHERE id='$deleteid'");
    $_SESSION['message'] = "User Delete Successfully";
}





?>

<!--  BEGIN CONTENT AREA  -->

<div id="content" class="main-content">
    <div class="layout-px-spacing">



        <div class="page-header">
            <div class="page-title">
                <h3>Users</h3>
            </div>
        </div>


        <div class="row layout-spacing">


            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div>
                        <?php if (isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger">
                                <!-- <button type="button" class="close btn-danger rounded-pill" data-dismiss="alert" aria-hidden="true">×</button> -->
                                <strong>Oh snap! </strong><?php echo @$_SESSION['error'];
                                                            unset($_SESSION['error']); ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($_SESSION['message'])) { ?>
                            <div class="alert alert-success">
                                <!-- <button type="button" class="close btn-success rounded-pill" data-dismiss="alert" aria-hidden="true">×</button> -->
                                <strong>Oh snap! </strong><?php echo @$_SESSION['message'];
                                                            unset($_SESSION['message']); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="widget-content widget-content-area">
                        <table id="show-hide-col" class="table table-hover" style="width:100%">
                            <thead style="border-bottom: none;">
                                <tr>
                                    <th>id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Approval Status</th>
                                    <th class="text-center ">View Details</th>
                                    <th class="text-center dt-no-sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = mysqli_query($con, "SELECT  * FROM `users` where role='user'  ");
                                // where role='user'
                                foreach ($sql as $getuser) {
                                ?>
                                    <tr>
                                        <td><?php echo $getuser['id'];  ?></td>
                                        <td><?php echo $getuser['first_name'];  ?></td>
                                        <td><?php echo $getuser['last_name'];  ?> </td>
                                        <td><?php echo $getuser['email'];  ?></td>
                                        <td>
                                            <?php if ($getuser['status'] == '1') { ?>
                                                <span class="badge badge-warning font-size-12">pending</span>
                                            <?php } else if ($getuser['status'] == '2') { ?>
                                                <span class="badge badge-success font-size-12">Approved</span>
                                            <?php } else if ($getuser['status'] == '3') { ?>
                                                <span class="badge badge-info font-size-12">Rejected</span>

                                            <?php

                                            } else { ?>
                                                <span class="badge badge-danger font-size-12">Blocked</span>

                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $getuser['id'];  ?>">
                                                Veiw Details
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade " id="exampleModal<?php echo $getuser['id'];  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="text-transform: capitalize;" id="exampleModalLabel"><?php echo $getuser['username'];  ?> All Details </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">User Name</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['username'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Age</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['age'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Address</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['address'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">City</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['city'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Zip Code</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['zipcode'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Phone Num</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['phonenum'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Role</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['role'];  ?>">
                                                            </div>
                                                            <!-- <div class="row">
                                                                <div class="col-6 d-flex flex-column justify-content-start">
                                                                    <label class="fw-600 fs-6">Driving Licence Front</label>

                                                                    <img src="../<?php echo $getuser['drivingLicenceFront'];  ?>" class="img-fluid" alt="">
                                                                </div>
                                                                <div class="col-6 d-flex flex-column justify-content-start">
                                                                    <label class="fw-600 fs-6">Driving Licence Back</label>

                                                                    <img src="../<?php echo $getuser['drivingLicenceBack'];  ?>" class="img-fluid" alt="">
                                                                </div>
                                                            </div> -->
                                                            <div class="row mt-4">
                                                                <div class="col-6 d-flex flex-column justify-content-start">
                                                                    <label class="fw-600 fs-6">Adhar Card Front</label>

                                                                    <img src="../<?php echo $getuser['adharCardFront'];  ?>" class="img-fluid" alt="">
                                                                </div>
                                                                <div class="col-6 d-flex flex-column justify-content-start">
                                                                    <label class="fw-600 fs-6">Adhar Card Back</label>

                                                                    <img src="../<?php echo $getuser['adharCardBack'];  ?>" class="img-fluid" alt="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <?php
                                            if ($getuser['status'] == '2') {
                                            ?>
                                                <!-- <a href="?reject=<?php echo $getuser['id']; ?>" class="btn btn-warning">
                                                    Reject
                                                </a> -->
                                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo $getuser['id']; ?>"" data-bs-whatever=" @mdo">
                                                    Reject
                                                </button>
                                                <!-- reject reasone modal -->

                                                <div class="modal fade" id="exampleModal1<?php echo $getuser['id'];  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Reject Reason </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="reject_db.php" method="post">
                                                                <div class="modal-body">
                                                                    <div class="mb-3 text-start">
                                                                        <label for="recipient-name" class="col-form-label">Email</label>
                                                                        <input type="text" class="form-control" disabled value="<?php echo $getuser['email'];  ?>" id="recipient-name">
                                                                        <input type="hidden" name="id" value="<?php echo $getuser['id'];  ?>">
                                                                        <input type="hidden" name="role" value="<?php echo $getuser['role'];  ?>">
                                                                    </div>
                                                                    <div class="mb-3 text-start">
                                                                        <label for="message-text" class="col-form-label">Reject Reason:</label>
                                                                        <textarea class="form-control" name="reject_reason" placeholder="Reject Reason" rows="5" id="message-text">


                                                                        </textarea>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <!-- <a href="?reject=<?php echo $getuser['id']; ?>" class="btn btn-warning">
                                                                        Reject
                                                                    </a> -->
                                                                    <input type="submit" name="reject" value="Reject">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>



                                            <?php

                                            } else {
                                            ?>
                                                <a href="?approve=<?php echo $getuser['id']; ?>" class="btn btn-success">
                                                    Approve
                                                </a>
                                            <?php
                                            }
                                            ?>
                                            <?php
                                            if ($getuser['status'] == '4') {
                                            ?>
                                                <a href="?unblocked=<?php echo $getuser['id']; ?>" class="btn btn-danger">
                                                    Unblocked
                                                </a>
                                            <?php

                                            } else {
                                            ?>
                                                <a href="?blocked=<?php echo $getuser['id']; ?>" class="btn btn-danger">
                                                    Blocked
                                                </a>

                                            <?php
                                            }
                                            ?>


                                            <a href="?delete=<?php echo $getuser['id']; ?>" class="btn btn-danger">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>


                            </tbody>

                        </table>
                        <!-- Button trigger modal -->



                    </div>
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