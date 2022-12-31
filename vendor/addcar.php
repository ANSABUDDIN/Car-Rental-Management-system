<?php
// session_start();

include('header.php');

$vendor_id = $_SESSION['vendor']['id'];
?>


<div class="main-content">

    <div class="page-content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Add Car Form </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Car Form</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-4">
                        <h3 class="mb-3">Add Car Form <?php $_SESSION['vendor']['id']; ?></h3>
                        <div>
                            <?php if (isset($_SESSION['error'])) { ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close btn-danger rounded-pill d-none" data-dismiss="alert" aria-hidden="true">×</button>
                                    <strong>Oh snap! </strong><?php echo @$_SESSION['error'];
                                                                unset($_SESSION['error']); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <form action="addcar_db.php" method="post" enctype="multipart/form-data" class="custom-validation">
                            <h4 class="mb-3">Car Information</h4>

                            <div class="row">
                                <div class="col-md-6 mb-3">

                                    <div class="mb-3">
                                        <label class="form-label">Car Name</label>
                                        <input class="form-control" required type="text" required name="car_name" placeholder="Car Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Model</label>
                                        <input class="form-control" required type="text " required name="model" placeholder="Model">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Rent/Day</label>
                                    <select class="form-control select2" name="rent_day">
                                        <option value="rent">Rent</option>
                                        <option value="day">Day</option>

                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Price</label>
                                        <input class="form-control" required type="text" name="price" placeholder="Price">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Price Details</label>
                                    <textarea class="form-control" name="price_details"></textarea>

                                </div>

                            </div>

                            <h2>Car Overview</h2>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Class</label>
                                    <select class="form-control select2" name="car_class">
                                        <option value="compact">Compact</option>
                                        <option value="suv">SUV</option>
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Price from</label>
                                        <input class="form-control" required type="text" name="price_from" placeholder="Price">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Gear box</label>
                                    <select name="gear_box" class="form-control select2">
                                        <option value="auto">auto</option>
                                        <option value="manual">manual</option>

                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Mileage</label>
                                        <input class="form-control" required type="text" name="gear_box" placeholder="Mileage">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Max passengers</label>
                                    <div class="mb-3">
                                        <input class="form-control" required type="text" name="max_passengers" placeholder="Enter Maxpassengers">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Fuel</label>
                                        <select name="fuel" class="form-control select2">
                                            <option value="Octen">Octen</option>
                                            <option value="Fuel">Fuel</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Max luggage</label>
                                        <input class="form-control" required type="number" name="" placeholder="Enter luggage">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Fuel usage</label>
                                        <input class="form-control" required type="number" name="" placeholder="Enter Fuel">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Doors</label>
                                        <input class="form-control" required type="number" name="doors" placeholder="Enter Door">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Engine capacity</label>
                                        <input class="form-control" data-parsley-type="number" required type="number" name="engine_capacity" placeholder="Enter Engine capacity<">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Deposit</label>
                                        <input class="form-control" required type="number" name="deposit" placeholder="Enter Deposit">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Car Varient</label>
                                        <input class="form-control" required type="text" name="car_varient" placeholder="Car Varient">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input class="form-control" required type="text" name="city" placeholder="Enter City">
                                    </div>
                                </div>

                                <!-- <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Car Varient</label>
                                        <input class="form-control" required type="text" name="" placeholder="Car Varient">
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Transmission Type</label>
                                        <input class="form-control" required type="text" name="transmission_type" placeholder="Transmission Type">
                                    </div>
                                </div>
                            </div>

                            <div class="row">


                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Year Of Registration</label>
                                        <input class="form-control" required type="number" name="registration_year" placeholder="Year Of Registration">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Registration Name</label>
                                        <input class="form-control" required type="text" name="" placeholder="Registration Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">


                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Pincode</label>
                                        <input class="form-control" required type="number" name="pincode" placeholder="Pincode">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Car Images:</label>
                                    <input class="form-control " required type="file" name="file[]" multiple style="border:none;">

                                </div>

                                <input class="form-control " required value="<?php echo $_SESSION['vendor']['id']; ?>" type="hidden" name="vendor_id" style="border:none;">


                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-4 text-end">
                                    <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Add Car</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>



        <?php

        include('footer.php');
        ?>