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

<?php
include('./header.php');
include('../config.php');
?>

<!--  BEGIN CONTENT AREA  -->

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Active User</p>
                                    <h4>
                                        <?php
                                        $movies = mysqli_query($con, "select * from users where status=2 && role='user'   ");
                                        echo mysqli_num_rows($movies);
                                        ?>

                                    </h4>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0"><span class="badge badge-soft-success me-2"> Active User </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Active Vendors</p>
                                    <h4>

                                        <?php
                                        $movies = mysqli_query($con, "select * from users where status=2 && role='vendor'   ");
                                        echo mysqli_num_rows($movies);
                                        ?>
                                    </h4>
                                </div>
                            </div>

                        </div>
                        <p class="mb-0"><span class="badge badge-soft-success me-2">Active Vendors</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Pending User</p>
                                    <h4>
                                        <?php
                                        $movies = mysqli_query($con, "select * from users where status=1 && role='user'   ");
                                        echo mysqli_num_rows($movies);
                                        ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0"><span class="badge badge-soft-warning me-2"> Pending User </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Pending Vendors</p>
                                    <h4>
                                        <?php
                                        $movies = mysqli_query($con, "select * from users where status=1 && role='vendor'   ");
                                        echo mysqli_num_rows($movies);
                                        ?>
                                    </h4>
                                </div>
                            </div>

                        </div>
                        <p class="mb-0"><span class="badge badge-soft-warning me-2">Pending Vendors </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Total Cars</p>
                                    <h4>
                                        <?php
                                        $movies = mysqli_query($con, "select * from cars   ");
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
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Booked Cars</p>
                                    <h4>
                                        <?php
                                        $movies = mysqli_query($con, "select * from cars where status=1   ");
                                        echo mysqli_num_rows($movies);
                                        ?>
                                    </h4>
                                </div>
                            </div>

                        </div>
                        <p class="mb-0"><span class="badge badge-soft-danger me-2">Booked Cars </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Available Cars</p>
                                    <h4>
                                        <?php
                                        $movies = mysqli_query($con, "select * from cars where status=0   ");
                                        echo mysqli_num_rows($movies);
                                        ?></h4>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0"><span class="badge badge-soft-success me-2"> Available Cars </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted fw-medium mt-1 mb-2">Blocked Accounts </p>
                                    <h4>
                                        <?php
                                        $movies = mysqli_query($con, "select * from users where status=3   ");
                                        echo mysqli_num_rows($movies);
                                        ?>
                                    </h4>
                                </div>
                            </div>

                        </div>
                        <p class="mb-0"><span class="badge badge-soft-danger me-2">Blocked Accounts </span>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="page-header">
            <div class="page-title">
                <h3>Recent Orders</h3>
            </div>
        </div> -->


        <!-- <div class="row layout-spacing">


            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <table id="show-hide-col" class="table table-hover" style="width:100%">
                            <thead style="border-bottom: none;">
                                <tr>
                                    <th>Car Package</th>
                                    <th>name</th>
                                    <th>Address</th>
                                    <th>Car rent</th>
                                    <th>Car Name</th>
                                    <th> Pickup Date</th>
                                    <th>Drop Off Date</th>
                                    <th>Time</th>
                                    <th>Approval Status</th>

                                    <th class="text-center dt-no-sorting">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>Premium</td>
                                    <td>Ansab Uddin</td>
                                    <td>Liberty Market NYC</td>
                                    <td>₹ 300</td>
                                    <td>Honda Civic 2022</td>
                                    <td>2022/12/25</td>
                                    <td>2022/12/28</td>
                                    <td>3:00 PM</td>
                                    <td>
                                        <div class=" badge badge-warning"> Pending </div>
                                    </td>

                                    <td class="text-center">
                                        <button class="btn btn-success">
                                            Approve
                                        </button>
                                        <button class="btn btn-danger">
                                            Delete
                                        </button>
                                    </td>
                                </tr>


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div> -->





    </div>
</div>
<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
<?php
include('./footer.php')
?>