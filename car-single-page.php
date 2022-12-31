<?php
session_start();
include('./header.php');
include('./config.php');

if (isset($_GET['car'])) {
    $car_id = $_GET['car'];

    $cars = mysqli_query($con, " SELECT * FROM cars where id='$car_id' ");

    // echo $cars;
    foreach ($cars as $GETcars) {
        $vendor_id = $GETcars['vendor_id'];
        $car_name = $GETcars['car_name'];
?>

        <!-- ====== Vehicle Single Block ====== -->
        <div class="vehicle-single-block vehicle-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="corousel-gallery-content">
                            <div class="gallery">
                                <div class="full-view owl-carousel">

                                    <?php
                                    $splitbycoma = explode(',', $GETcars['images']);
                                    for ($j = 0; $j < sizeof(explode(',', $GETcars['images'])); $j++) { ?>
                                        <div class="item" href="<?php echo "" . $splitbycoma[$j]; ?>">
                                            <img src="<?php echo "" . $splitbycoma[$j]; ?>" alt="post">
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>

                                <div class="list-view owl-carousel">
                                    <?php
                                    $splitbycoma = explode(',', $GETcars['images']);
                                    for ($j = 0; $j < sizeof(explode(',', $GETcars['images'])); $j++) { ?>
                                        <div class="item">
                                            <img src="<?php echo "" . $splitbycoma[$j]; ?>">
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div> <!-- /.gallery-two -->
                        </div> <!-- /.corousel-gallery-content -->

                        <div class="vehicle-single-content">
                            <div class="tb mb-block">
                                <div class="tb-cell mb-block">
                                    <h2 class="vehicle-single-title" style="text-transform: capitalize;">
                                        <?php echo $GETcars['car_name']; ?>
                                        <?php echo $GETcars['model']; ?>
                                        Model
                                    </h2>
                                </div><!-- /.tb-cell -->
                                <div class="tb-cell mb-block">
                                    <h2 class="pull-right rent-price">Rent/Day: $<?php echo $GETcars['price']; ?></h2>
                                </div><!-- /.tb-cell -->
                            </div><!-- /.tb -->
                            <div class="clearfix"></div><!-- /.clearfix -->

                            <div class="price-details">
                                <h3 class="details-title">Price Details- </h3>
                                <div class="fw-500" style="text-transform: capitalize;">
                                    <?php echo $GETcars['price_detail']; ?>
                                </div>
                                <!-- <ul>
                                    <li>Rent/Day: $150 (negotiable)</li>
                                    <li>Rent/Week: $900 (negotiable)</li>
                                    <li>Rent/Month: $3000 (negotiable)</li>
                                    <li>Service Charge : 150 USD per month, subject to change</li>
                                    <li>Security Deposit : All Security's Company</li>
                                    <li>Servicing : Servicing free</li>
                                </ul> -->
                            </div><!-- /.price -->

                            <div class="vehicle-overview">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="overview-title">Car Overview</h3>
                                        <div class="overview">
                                            <ul>
                                                <li>Class: <span> <?php echo $GETcars['car_class']; ?></span></li>
                                                <li>Price from: <span><?php echo $GETcars['price_from']; ?> USD / day</span></li>
                                                <li>Gear box: <span><?php echo $GETcars['gear_box']; ?> </span></li>
                                                <li>Mileage: <span>Unlimited</span></li>
                                                <li>Max passengers: <span> <?php echo $GETcars['max_passengers']; ?></span></li>
                                                <li>Fuel: <span><?php echo $GETcars['fuel']; ?></span></li>
                                                <!-- <li>Max luggage: <span><?php echo $GETcars['fuel']; ?></span></li> -->
                                                <!-- <li>Fuel usage: <span>5-6/100km</span></li> -->
                                                <li>Doors: <span><?php echo $GETcars['fuel']; ?></span></li>
                                                <li>Engine capacity: <span><?php echo $GETcars['engine_capacity']; ?></span></li>
                                                <li>Deposit: <span><?php echo $GETcars['deposit']; ?></span></li>
                                            </ul>
                                        </div><!-- /.vehicle-overview -->
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.overview -->

                            <div class="vehicle-internal-features">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="features-title">Internal features:</h3>
                                        <ul class="features-list">
                                            <li>A/C full-time</li>
                                            <li>Audio Music</li>
                                            <li>Video Music</li>
                                            <li>Special Set</li>
                                            <li>Fire exit</li>
                                            <li>Sound Proof</li>
                                            <li>Satellite Tracker</li>
                                            <li>Car Heater</li>
                                            <li>Mineral Water</li>
                                            <li>Cold Drinks</li>
                                        </ul>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <h3 class="features-title">External features:</h3>
                                        <ul class="features-list">
                                            <li>4 Doors</li>
                                            <li>2 Outlooking Glass</li>
                                            <li>Awesome Balance System</li>
                                            <li>Powerful Head Light</li>
                                            <li>Backup Fuel</li>
                                            <li>Emergency Break</li>
                                            <li>Emergency Safety Tools</li>
                                        </ul>
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.indoor -->
                        </div><!-- /.family-apartment-content -->

                        <div class="hidden-md hidden-lg text-center extend-btn">
                            <span class="extend-icon">
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </div>
                    </div> <!-- /.col-md-8 -->

                    <div class="col-md-4">
                        <div class="vehicle-sidebar pd-zero">
                            <div>
                                <?php if (isset($_SESSION['message'])) { ?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close btn-success rounded-pill d-none" data-dismiss="alert" aria-hidden="true">×</button>
                                        <strong>Congrats </strong><?php echo @$_SESSION['message'];
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
                            <form action="./bookcar_db.php" method="post" class="advance-search-query search-query-two">
                                <h2 class="form-title">Make A Reservation</h2>
                                <div class="form-content available-filter">
                                    <div class="regular-search">
                                        <div class="form-group">
                                            <input type="hidden" name="vendor_id" value="<?php echo $vendor_id; ?>">
                                            <input type="hidden" name="car_name" value="<?php echo $car_name; ?>">
                                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id']; ?> ">
                                            <input type="hidden" name="car_id" value="<?php echo  $car_id;   ?>">
                                            <input type="hidden" name="price" value="<?php echo   $GETcars['price']; ?>">
                                            <label class="text-uppercase">Picking up location</label>
                                            <div class="input">
                                                <i class="fa fa-map-marker"></i>
                                                <input type="text" name="puLocation" placeholder="your location" class="pick-location form-controller">
                                            </div>
                                            <!--/.input-->

                                            <label class="text-uppercase">Dropping off location</label>
                                            <div class="input">
                                                <i class="fa fa-map-marker"></i>
                                                <input type="text" name="doLocation" placeholder="your location" class="pick-location form-controller">
                                            </div>
                                            <!--/.input-->

                                            <label>Picking up Date</label>
                                            <div class="input">
                                                <i class="fa fa-calendar"></i>
                                                <input type="text " name="puDate" class="date-start date-selector form-controller" placeholder="Hire On">
                                            </div>
                                            <!--/.input-->

                                            <label>Dropping off Date</label>
                                            <div class="input">
                                                <i class="fa fa-calendar"></i>
                                                <input type="text" name="doDate" class="date-end date-selector form-controller" placeholder="Return On">
                                            </div>
                                            <!--/.input-->

                                            <label class="text-uppercase">Picking up Time</label>
                                            <div class="input">
                                                <i class="fa fa-clock-o"></i>
                                                <input type="text" name="puTime" class="time-selector form-controller" placeholder="15:00 am">
                                            </div>
                                            <!--/.input-->

                                            <label class="text-uppercase">Dropping of Time</label>
                                            <div class="input">
                                                <i class="fa fa-clock-o"></i>
                                                <input type="text" name="doTime" class="time-selector form-controller" placeholder="15:00 am">
                                            </div>
                                            <!--/.input-->

                                            <!-- <label class="text-uppercase">Select Class</label>
                                            <div class="input" name="car_class">
                                                <select name="car_class">
                                                    <option disabled selected="selected">Select Car Class</option>
                                                    <option value="Intermediate">Intermediate</option>
                                                    <option value="Compact">Compact</option>
                                                    <option value="Station Wagon">Station Wagon</option>
                                                    <option value="SUV">SUV</option>
                                                    <option value="Minibus">Minibus</option>
                                                </select>
                                            </div> -->
                                            <!-- /.input -->

                                            <!-- <label class="text-uppercase">Select Fuel</label>
                                            <div class="input">
                                                <select name="car_fuel">
                                                    <option disabled selected="selected">Select Car Fuel</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="Octen">Octen</option>
                                                </select>
                                            </div> -->
                                            <!-- /.input -->
                                        </div><!-- /.form-group -->

                                    </div><!-- /.div regular-search -->



                                    <div class="check-vehicle-footer">
                                        <button type="submit" class="button yellow-button text-decoration-none text-white book-btn" name="submit"> Book Now</button>
                                        <div class="advanced-search yellow-color">
                                            <!-- <a href="#" class="advanced-search-btn"><i class="fa fa-search"></i>Available Extra</a> -->
                                        </div>
                                    </div><!-- /.check-vehicle-footer -->
                                </div><!-- /.from-cotent -->
                            </form><!-- /.advance_search_query -->

                            <div class="ads_area">
                                <a href="#"><img src="assets/images/Add-Image.jpg" alt="add" /></a>
                            </div><!-- /.ads_area -->
                        </div><!-- /.vehicle-sidebar -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container  -->
        </div><!-- /.Popular Vehicle Block -->

        <!-- ====== Ralated  Block ====== -->
        <div class="ralated-block bg-gray-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ralated-heading text-center">
                            <h2 class="related-title">Related Cars</h2>
                        </div><!-- /.blog-heading -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <!-- vehicle-slider -->
                <div class="vehicle-slider slider-style-two owl-carousel" data-item="[4,2,1,1]">
                    <?php
                    $cars = mysqli_query($con, " SELECT * FROM `cars`");
                    // echo $cars;
                    foreach ($cars as $GETcars) {
                        $splitbycoma = explode(',', $GETcars['images']);
                    ?>

                        <div class="item">
                            <a href="car-single-page.php?car=<?php echo $GETcars['id']; ?>">
                                <div class="vehicle-content theme-yellow">
                                    <div class="vehicle-thumbnail" style="height: 170px;">

                                        <img src="./<?php echo $splitbycoma[0]; ?>" alt="<?php echo $splitbycoma[0]; ?>" />
                                    </div><!-- /.vehicle-thumbnail -->
                                    <div class="vehicle-bottom-content">
                                        <h2 class="vehicle-title white"><a href="#" style="text-transform: capitalize;"><?php echo $GETcars['car_name']; ?></a></h2>
                                        <div class="vehicle-meta">
                                            <!-- Toyota Aygo -->
                                            <div class="meta-item white">
                                                <span>Rent: $<?php echo $GETcars['price']; ?> / </span>
                                                Day.
                                                <!-- $<?php echo $GETcars['price']; ?> / Km. -->
                                            </div>
                                        </div><!-- /.meta-left -->
                                    </div><!-- /.vehicle-bottom-content -->
                                </div><!-- /.car-content -->
                            </a>
                        </div><!-- /.item -->
                    <?php
                    }
                    ?>
                    <!-- /.item -->
                </div><!-- /.vehicle-slider -->
            </div><!-- /.container -->
        </div><!-- /.ralated-block -->

        <!-- ======footer area======= -->
<?php
    }
}
include('./footer.php');

?>