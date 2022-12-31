<?php
include('header.php');
// session_start();
include('../config.php');
$current_user_id = $_SESSION['user']['id'];

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
                    <h4 class="page-title mb-0 font-size-18">Orderlist </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Orderlist</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- start row -->
        <div class="row">


            <div class="col-12 ">



                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">My Orderlist</h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Car Name</th>
                                        <!-- <th scope="col">Car Model</th> -->
                                        <th scope="col">Day/Rent</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Pickup Date</th>
                                        <!-- <th scope="col">Dropoff Date</th> -->
                                        <th scope="col">Pickup Time</th>
                                        <!-- <th scope="col">Dropoff Time</th> -->
                                        <th scope="col">Pickup Location</th>
                                        <th scope="col">Dropoff Location</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT  * FROM `bookings` where `user_id` ='$current_user_id' AND `status`<>'2'");
                                    foreach ($sql as $key => $value) {

                                    ?>
                                        <tr>
                                            <td><?php echo $value['id']; ?></td>
                                            <td><?php echo $value['car_name']; ?></td>
                                            <!-- <td>2008</td> -->
                                            <td>Rent</td>
                                            <td>$350</td>
                                            <td><?php echo $value['pickup_Date']; ?></td>
                                            <!-- <td><?php echo $value['dropoff_Date']; ?></td> -->
                                            <td><?php echo $value['pickup_Time']; ?></td>
                                            <!-- <td><?php echo $value['dropoff_Time']; ?></td> -->
                                            <td><?php echo $value['pickup_Location']; ?></td>
                                            <td><?php echo $value['dropoff_Location']; ?></td>
                                            <?php
                                            if ($value['status'] == 1) {
                                            ?>
                                                <td><span class="badge badge-soft-success font-size-12">Approved</span>

                                                <?php
                                            } else if ($value['status'] == 0) {
                                                ?>
                                                <td><span class="badge badge-soft-warning font-size-12">Pending</span>
                                                </td>
                                            <?php
                                            }
                                            ?>
                                            <td><a href="#" class="btn btn-danger btn-sm">Cancel Order</a></td>
                                        </tr>
                                    <?php
                                    }

                                    ?>
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
            </div>


        </div>

        <!-- end row -->

    </div>

    <!-- End Page-content -->



    <?php
    include('footer.php');
    ?>
</div>