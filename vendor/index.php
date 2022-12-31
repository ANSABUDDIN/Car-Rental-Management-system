<?php
include('header.php');
include('../config.php');
$vendor_id = $_SESSION['vendor']['id'];


$sql = mysqli_query($con, "select * from users where id='$vendor_id'");
foreach ($sql as $getvalue) {
    $reason = $getvalue['reject_reason'];
?>


    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <!-- <li class="breadcrumb-item active"></li> -->
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div>
                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger">
                        <!-- <button type="button" class="close btn-danger rounded-pill" data-dismiss="alert" aria-hidden="true">×</button> -->
                        <strong>Oh snap! </strong><?php echo @$_SESSION['error'];
                                                    unset($_SESSION['error']); ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['rev'])) { ?>
                    <div class="alert alert-info text-center">
                        <!-- <button type="button" class="close btn-success rounded-pill" data-dismiss="alert" aria-hidden="true">×</button> -->
                        <strong></strong><?php echo @$_SESSION['rev'];
                                            unset($_SESSION['rev']); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div>
                                        <php class="text-muted fw-medium mt-1 mb-2">Available Cars </p>
                                            <h4>
                                                <?php
                                                $movies = mysqli_query($con, "select * from cars where status=0 AND vendor_id='$vendor_id'  ");
                                                echo mysqli_num_rows($movies);
                                                ?>

                                            </h4>
                                    </div>
                                </div>
                            </div>
                            <p class="mb-0"><span class="badge badge-soft-success me-2"> Available Cars</span>
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
                                        <p class="text-muted fw-medium mt-1 mb-2">Booked Cars</p>
                                        <h4>
                                            <?php
                                            $movies = mysqli_query($con, "select * from cars where status=1 AND vendor_id='$vendor_id'  ");
                                            echo mysqli_num_rows($movies);
                                            ?>
                                        </h4>
                                    </div>
                                </div>

                            </div>
                            <p class="mb-0"><span class="badge badge-soft-danger me-2"> Booked Cars </span>
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
                                        <p class="text-muted fw-medium mt-1 mb-2">Total Cars</p>
                                        <h4>

                                            <?php
                                            $movies = mysqli_query($con, "select * from cars where vendor_id='$vendor_id'");
                                            echo mysqli_num_rows($movies);
                                            ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-0"><span class="badge badge-soft-primary me-2"> Total Cars </span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <?php
            if ($reason == "") {
            ?>

                <div>

                </div>
            <?php
            } else {
            ?>
                <div class="">

                    <div class="alert mt-3 alert-danger text-start" style="text-transform: capitalize;">
                        <h4 class="fw-900">
                            Kyc Reject Reason
                        </h4>
                        <br>
                        <?php
                        echo $reason;
                        ?>
                        !
                        <br>
                        <br>
                        Regards : info@carRenta .
                        <br>
                        Thanks !
                    </div>
                </div>
            <?php
            }
            ?>


        <?php
    }
    include('footer.php');
        ?>