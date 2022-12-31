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
    $result = mysqli_query($con, "UPDATE cars SET `status`='1' WHERE id='$approveid'");
    $_SESSION['message'] = "Approve Successfully";
}
if (isset($_GET['delete'])) {
    $deleteid = $_GET['delete'];
    $result = mysqli_query($con, "DELETE FROM `cars` WHERE id='$deleteid'");
    $_SESSION['message'] = "User Delete Successfully";
}




?>

<!--  BEGIN CONTENT AREA  -->

<div id="content" class="main-content">
    <div class="layout-px-spacing">



        <div class="page-header">
            <div class="page-title">
                <h3>Car Listing</h3>
            </div>
        </div>


        <div class="row layout-spacing">


            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div>
                        <?php if (isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close btn-danger rounded-pill" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Oh snap! </strong><?php echo @$_SESSION['error'];
                                                            unset($_SESSION['error']); ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($_SESSION['message'])) { ?>
                            <div class="alert alert-success">
                                <!-- <button type="button" class="close btn-success rounded-pill" data-dismiss="alert" aria-hidden="true">×</button> -->
                                <strong> </strong><?php echo @$_SESSION['message'];
                                                    unset($_SESSION['message']); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="widget-content widget-content-area">
                        <table id="show-hide-col" class="table table-hover" style="width:100%">
                            <thead style="border-bottom: none;">
                                <tr>
                                    <th>id</th>
                                    <th>Car Name</th>
                                    <th>Model</th>
                                    <th>Price</th>
                                    <th>Approval Status</th>
                                    <th class="text-center ">View Details</th>
                                    <th class="text-center dt-no-sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = mysqli_query($con, "SELECT  * FROM `cars`   ");
                                // where role='user'
                                foreach ($sql as $getuser) {
                                    $splitbycoma = explode(',', $getuser['images']);
                                ?>
                                    <tr>
                                        <td><?php echo $getuser['id'];  ?></td>
                                        <td><?php echo $getuser['car_name'];  ?></td>
                                        <td><?php echo $getuser['model'];  ?> </td>
                                        <td><?php echo $getuser['price'];  ?></td>
                                        <td>
                                            <?php if ($getuser['status'] == '0') { ?>
                                                <span class="badge badge-warning font-size-12">pending</span>
                                            <?php } else if ($getuser['status'] == '1') { ?>
                                                <span class="badge badge-success font-size-12">Approved</span>
                                            <?php } else { ?>
                                                <span class="badge badge-danger font-size-12">Blocked</span>

                                            <?php

                                            } ?>
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
                                                            <h5 class="modal-title" style="text-transform: capitalize;" id="exampleModalLabel"><?php echo $getuser['car_name'];  ?> All Details </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">City</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['city'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Engine Capacity</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['engine_capacity'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Pincode</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['pincode'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Car Class</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['car_class'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Max Passengers</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['max_passengers'];  ?>">
                                                            </div>
                                                            <div class="my-3 text-start">
                                                                <label class="fw-600 fs-6">Registration year</label>
                                                                <input type="text" class="form-control" disabled value="<?php echo $getuser['registration_year'];  ?>">
                                                            </div>
                                                           
                                                           
                                                            <div class="row mt-4">
                                                                <div class="col-12 d-flex  flex-column justify-content-start">
                                                                    <label class="fw-900 text-start fs-6">Car image</label>

                                                                    <img src="../<?php echo $splitbycoma[0]; ?>" class="img-fluid" alt="">
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="?approve=<?php echo $getuser['id']; ?>" class="btn btn-success">
                                                Approve
                                            </a>
                                            


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