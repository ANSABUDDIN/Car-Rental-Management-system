<?php
include('header.php');
include('../config.php');

$vendor_id = $_SESSION['vendor']['id'];

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
                    <h4 class="page-title mb-0 font-size-18">My Booked Cars</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">My Booked Cars</a></li>
                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h3 class="mb-3">New Deposits</h3>
                                    <form action="#" class="custom-validation">
                                        <h4 class="mb-3">Account Information</h4>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Select Plan</label>
                                                <select class="form-control select2">
                                                    <option value="BASIC 100 USDT">BASIC 100 USDT</option>
                                                    <option value="BASIC 200 USDT">BASIC 200 USDT</option>
                                                    <option value="BASIC 500 USDT">BASIC 500 USDT</option>
                                                    <option value="BASIC 1000 USDT">BASIC 1000 USDT</option>
                                                    <option value="STANDARD 2500 USDT">STANDARD 2500 USDT</option>
                                                    <option value="STANDARD 5000 USDT">STANDARD 5000 USDT</option>
                                                    <option value="STANDARD 10,000 USDT">STANDARD 10,000 USDT</option>
                                                    <option value="STANDARD 25,000 USDT">STANDARD 25,000 USDT</option>
                                                    <option value="Premium Gold 50,000 USDT">Premium Gold 50,000 USDT</option>
                                                    <option value="Premium Diamond 100,000 USDT">Premium Diamond 100,000 USDT</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Amount</label>
                                                    <input class="form-control" required type="text" name=""
                                                        placeholder="Enter Amount">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Account Number</label>
                                                    <input class="form-control" required type="text" name=""
                                                        placeholder="Enter Account Number">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Account Title</label>
                                                    <input class="form-control" required type="text" name=""
                                                        placeholder="Enter Account Title">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email Address</label>
                                                    <input class="form-control" required type="email" name=""
                                                        placeholder="Enter Email Address">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone Number</label>
                                                    <input class="form-control" data-parsley-type="number" required
                                                        type="text" name="" placeholder="Enter Phone Number">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-success waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>

                    </div> -->

        <!-- <a href="addcar.php">
            <div class="text-end">
                <div>
                    <button class="btn btn-primary nofocus">Add New Car</button>
                </div>
            </div>
        </a> -->


        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card" style="overflow-x:scroll !important; width: 100% !important; overflow-y:hidden;">
                    <div class="card-body">

                        <h4 class="card-title">My Booked Cars</h4>
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
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <!-- <th>img</th> -->
                                        <th>Car Name</th>
                                        <th>Pickup Location</th>
                                        <th>DropOff Location</th>
                                        <th>Booking Status</th>
                                        <th>Pickup Date</th>
                                        <th>Dropoff Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                    $sql = mysqli_query($con, "SELECT  * FROM `bookings` where `vendor_id` = $vendor_id ");
                                    foreach ($sql as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $value['id']; ?></td>

                                            <td><?php echo $value['car_name']; ?></td>
                                            <td><?php echo $value['pickup_Location']; ?></td>
                                            <td><?php echo $value['dropoff_Location']; ?></td>
                                            <td><?php echo $value['pickup_Date']; ?></td>
                                            <td><?php echo $value['dropoff_Date']; ?></td>
                                            <td><?php echo $value['pickup_Time']; ?></td>
                                            <td><?php echo $value['dropoff_Time']; ?></td>

                                            
                                           
                                           
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>
    <!-- end row -->
</div>
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
                                    All rights reserved.
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
include('footer.php');
?>