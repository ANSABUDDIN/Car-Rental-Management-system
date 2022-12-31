<?php
include('./header.php');
include('./config.php');
?>

<!-- ======= Main Slider Area =======-->

<section id="teaser">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12 pull-right">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides start -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <h1 class="title">Luxury car from from $28 day
                                <span class="subtitle">Treat yourself in USA</span>
                            </h1>
                            <div class="car-img">
                                <img src="assets/images/slider-car/slide1.png" class="img-responsive" alt="car1">
                            </div>
                        </div>
                        <div class="item">
                            <h1 class="title">Get 15% off your rental
                                <span class="subtitle">Plan your trip now</span>
                            </h1>
                            <div class="car-img">
                                <img src="assets/images/slider-car/slide2.png" class="img-responsive" alt="car1">
                            </div>
                        </div>
                    </div>
                    <!-- Wrapper for slides end -->

                    <!-- Slider Controls start -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <!-- Slider Controls end -->
                </div>
            </div>
            <div class="col-md-5 col-xs-12 pull-left">
                <div class="reservation-form-shadow">

                    <form action="#" method="post" name="car-select-form" id="car-select-form">

                        <div class="alert alert-danger hidden" id="car-select-form-msg">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>Note:</strong> All fields required!
                        </div>

                        <!-- <div class="styled-select-car">
                      <select name="car-select" id="car-select">
                        <option value="">Select your car type</option>
                        <option value="img/vehicle1.jpg">VW Golf VII</option>
                        <option value="img/vehicle2.jpg">Audi A1 S-LINE</option>
                        <option value="img/vehicle3.jpg">Toyota Camry</option>
                        <option value="img/vehicle4.jpg">BMW 320 ModernLine</option>
                        <option value="img/vehicle5.jpg">Mercedes-Benz GLK</option>
                        <option value="img/vehicle6.jpg">VW Passat CC</option>
                      </select>
                    </div> -->
                        <div>
                            <div class="select-car-div">
                                <select name="select-car" id="">
                                    <option value="" class="">Select your car type</option>
                                    <option value="">VW Golf VII</option>
                                    <option value="">Audi A1 S-LINE</option>
                                    <option value="">Toyota Camry</option>
                                    <option value="">BMW 320 ModernLine</option>
                                    <option value="">Mercedes-Benz GLK</option>
                                    <option value="">VW Passat CC</option>
                                </select>
                            </div>
                        </div>

                        <!-- <div class="location">
                      <div class="input-group pick-up">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Pick-up</span>
                        <input type="text" name="pick-up-location"  id="pick-up-location" class="form-control autocomplete-location" placeholder="Enter a City or Airport">
                      </div>

                      <a class="different-drop-off" href="#">Need a different drop-off location?</a>

                      <div class="input-group drop-off w-100">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span> Drop-off</span>
                        <input type="text" name="drop-off-location" id="drop-off-location" class="form-control autocomplete-location w-100" placeholder="Enter a City or Airport">
                      </div>
                    </div> -->
                        <div>
                            <div>
                                <div class="input-placeholder">
                                    <div class="flex-div">
                                        <div class="inner-text-span"><span><i class="fa-solid fa-location-dot span-color"></i></span><span class="pickup-span">Pick Up</span></div>
                                        <span><input type="text" placeholder="Enter a City or Airport"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="main-drop">
                                <a href="#" class="drop-para">Need a different drop-off location?</a>
                            </div>

                            <div>
                                <div class="input-placeholder">
                                    <div class="flex-div">
                                        <div class="inner-text-span"><span><i class="fa-solid fa-location-dot span-color"></i></span><span class="pickup-span"> Drop-off</span></div>
                                        <span><input type="text" placeholder="Enter a City or Airport"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="parent-div">
                                <div class="sub-div ">
                                    <div class="input-placeholder">
                                        <div class="flex-div">
                                            <div class="inner-text-span"><span><i class="fa-solid fa-calendar-days span-color"></i></span><span class="pickup-span">Pick Up</span></div>
                                            <span><input type="date" placeholder="dd/mm/yy" class="date-field"></span>


                                        </div>
                                    </div>
                                </div>

                                <div class="time-div">
                                    <span><input type="time" class="time-field" placeholder="12:00 AM"></span>
                                </div>
                            </div>
                            <div>
                                <div class="parent-div">
                                    <div class="sub-div">
                                        <div class="input-placeholder">
                                            <div class="flex-div">
                                                <div class="inner-text-span"><span><i class="fa-solid fa-calendar-days span-color"></i></span>
                                                    <span class="pickup-span">Drop off</span>
                                                </div>
                                                <span><input type="date" placeholder="dd/mm/yy" class="date-field"></span>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="time-div">
                                        <span><input type="time" class="time-field" placeholder="12:00 AM"></span>
                                    </div>
                                </div>
                                <!-- <div>
                                <div class="input-placeholder">
                                    <div class="flex-div">
                                        <div class="inner-text-span"><span><i class="fa-solid fa-location-dot span-color"></i></span><span class="pickup-span">Pick Up</span></div>
                                        <span><input type="date" placeholder="dd/mm/yy"></span>
                                        
                                    </div>
                                </div>
                                
                            </div> -->



                            </div>
                            <!-- <div class="datetime pick-up">
                      <div class="date pull-left">
                        <div class="input-group">
                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Pick-up</span>
                          <input type="date" style="width: 138px;"  name="pick-up-date" id="pick-up-date" class="form-control datepicker"  placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                      <div class="time pull-right">
                        <div class="styled-select-time">
                          <select name="pick-up-time" id="pick-up-time">
                            <option value="12:00 AM">12:00 AM</option>
                            <option value="12:30 AM">12:30 AM</option>
                            <option value="01:00 AM">01:00 AM</option>
                            <option value="01:30 AM">01:30 AM</option>
                            <option value="02:00 AM">02:00 AM</option>
                            <option value="02:30 AM">02:30 AM</option>
                            <option value="03:00 AM">03:00 AM</option>
                            <option value="03:30 AM">03:30 AM</option>
                            <option value="04:00 AM">04:00 AM</option>
                            <option value="04:30 AM">04:30 AM</option>
                            <option value="05:00 AM">05:00 AM</option>
                            <option value="05:30 AM">05:30 AM</option>
                            <option value="06:00 AM">06:00 AM</option>
                            <option value="06:30 AM">06:30 AM</option>
                            <option value="07:00 AM">07:00 AM</option>
                            <option value="07:30 AM">07:30 AM</option>
                            <option value="08:00 AM">08:00 AM</option>
                            <option value="08:30 AM">08:30 AM</option>
                            <option value="09:00 AM">09:00 AM</option>
                            <option value="09:30 AM">09:30 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="10:30 AM">10:30 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="11:30 AM">11:30 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="12:30 PM">12:30 PM</option>
                            <option value="01:00 PM">01:00 PM</option>
                            <option value="01:30 PM">01:30 PM</option>
                            <option value="02:00 PM">02:00 PM</option>
                            <option value="02:30 PM">02:30 PM</option>
                            <option value="03:00 PM">03:00 PM</option>
                            <option value="03:30 PM">03:30 PM</option>
                            <option value="04:00 PM">04:00 PM</option>
                            <option value="04:30 PM">04:30 PM</option>
                            <option value="05:00 PM">05:00 PM</option>
                            <option value="05:30 PM">05:30 PM</option>
                            <option value="06:00 PM">06:00 PM</option>
                            <option value="06:30 PM">06:30 PM</option>
                            <option value="07:00 PM">07:00 PM</option>
                            <option value="07:30 PM">07:30 PM</option>
                            <option value="08:00 PM">08:00 PM</option>
                            <option value="08:30 PM">08:30 PM</option>
                            <option value="09:00 PM">09:00 PM</option>
                            <option value="09:30 PM">09:30 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                            <option value="10:30 PM">10:30 PM</option>
                            <option value="11:00 PM">11:00 PM</option>
                            <option value="11:30 PM">11:30 PM</option>
                          </select>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div> -->

                            <!-- <div class="datetime drop-off">
                      <div class="date pull-left">
                        <div class="input-group">
                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Drop-off</span>
                          <input type="date"  name="drop-off-date" id="drop-off-date" class="form-control datepicker index-date" placeholder="mm/dd/yyyy">
                        </div>
                      </div>
                      <div class="time pull-right">
                        <div class="styled-select-time">
                          <select name="drop-off-time" id="drop-off-time">
                            <option value="12:00 AM">12:00 AM</option>
                            <option value="12:30 AM">12:30 AM</option>
                            <option value="01:00 AM">01:00 AM</option>
                            <option value="01:30 AM">01:30 AM</option>
                            <option value="02:00 AM">02:00 AM</option>
                            <option value="02:30 AM">02:30 AM</option>
                            <option value="03:00 AM">03:00 AM</option>
                            <option value="03:30 AM">03:30 AM</option>
                            <option value="04:00 AM">04:00 AM</option>
                            <option value="04:30 AM">04:30 AM</option>
                            <option value="05:00 AM">05:00 AM</option>
                            <option value="05:30 AM">05:30 AM</option>
                            <option value="06:00 AM">06:00 AM</option>
                            <option value="06:30 AM">06:30 AM</option>
                            <option value="07:00 AM">07:00 AM</option>
                            <option value="07:30 AM">07:30 AM</option>
                            <option value="08:00 AM">08:00 AM</option>
                            <option value="08:30 AM">08:30 AM</option>
                            <option value="09:00 AM">09:00 AM</option>
                            <option value="09:30 AM">09:30 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="10:30 AM">10:30 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="11:30 AM">11:30 AM</option>
                            <option value="12:00 PM">12:00 PM</option>
                            <option value="12:30 PM">12:30 PM</option>
                            <option value="01:00 PM">01:00 PM</option>
                            <option value="01:30 PM">01:30 PM</option>
                            <option value="02:00 PM">02:00 PM</option>
                            <option value="02:30 PM">02:30 PM</option>
                            <option value="03:00 PM">03:00 PM</option>
                            <option value="03:30 PM">03:30 PM</option>
                            <option value="04:00 PM">04:00 PM</option>
                            <option value="04:30 PM">04:30 PM</option>
                            <option value="05:00 PM">05:00 PM</option>
                            <option value="05:30 PM">05:30 PM</option>
                            <option value="06:00 PM">06:00 PM</option>
                            <option value="06:30 PM">06:30 PM</option>
                            <option value="07:00 PM">07:00 PM</option>
                            <option value="07:30 PM">07:30 PM</option>
                            <option value="08:00 PM">08:00 PM</option>
                            <option value="08:30 PM">08:30 PM</option>
                            <option value="09:00 PM">09:00 PM</option>
                            <option value="09:30 PM">09:30 PM</option>
                            <option value="10:00 PM">10:00 PM</option>
                            <option value="10:30 PM">10:30 PM</option>
                            <option value="11:00 PM">11:00 PM</option>
                            <option value="11:30 PM">11:30 PM</option>
                          </select>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div> -->

                            <a href="/category.php">
                                <input type="text" class="submit" name="submit" value="continue car reservation">
                            </a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<div class="arrow-down"></div>


<!-- ====== Section divider ====== -->






<!-- ====== Popular Vehicle Block ====== -->
<div class="popular-vehicle-block pd-90 ex-pdt-102 ex-pdtm-72">
    <div class="container">
        <div class="row tb default-margin-bottom yellow-theme">
            <!-- block-title-area -->
            <div class="col-md-9 col-sm-8 block-title-area tb-cell">
                <div class="heading-content style-one border">
                    <h3 class="subtitle">Popular Rental Servises</h3>
                    <h2 class="title">Popular car</h2>
                </div><!-- /.heading-content-one -->
            </div><!-- /.col-md-9 -->

            <!-- block-navigation-area -->
            <div class="col-md-3 col-sm-4 hidden-xs block-navigation-area tb-cell">
                <div class="pull-right">
                    <div class="item-navigation hidden-xs">
                        <a href="#" class="previous-item">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#" class="next-item">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div><!-- /.item-navigation -->

                    <div class="view-all-item">
                        <a href="category.php" class="view-all-btn">View all</a>
                    </div><!-- /.view-all-item -->
                </div><!-- /.pull-right -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->

        <!-- vehicle-slider -->
        <div class="vehicle-slider slider-style-two owl-carousel" data-item="[4,2,1,1]">
            <?php
            $cars = mysqli_query($con, " SELECT * FROM `cars` where status='1'  ");
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

        <!-- block-navigation-area -->
        <div class="block-navigation-area visible-xs-block">
            <div class="view-all-item clearfix">
                <a href="#" class="view-all-btn">View all</a>
            </div><!-- /.view-all-item -->
        </div><!-- /.block-navigation-area -->
    </div><!-- /.container  -->
</div><!-- /.Popular Vehicle Block -->

<!-- ======Regular-vehicle-block======= -->
<div class="regular-vehicle-block pd-90 bg-gray-color">
    <div class="container">
        <div class="row tb default-margin-bottom yellow-theme">
            <div class="col-md-9 col-sm-8 block-title-area tb-cell">
                <div class="heading-content style-one border">
                    <h3 class="subtitle">Find Your Car For Safe Journey</h3>
                    <h2 class="title">Our Regular car</h2>
                </div><!-- /.heading-content-one -->
            </div><!-- /.col-md-10 -->
            <div class="col-md-3 col-sm-4 hidden-xs block-navigation-area tb-cell">
                <div class="pull-right">
                    <div class="item-navigation">
                        <a href="#" class="previous-item">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#" class="next-item">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div><!-- /.item-navigation -->

                    <div class="view-all-item">
                        <a href="#" class="view-all-btn">View all</a>
                    </div><!-- /.view-all-item -->
                </div><!-- /.pull-right -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row -->

        <div class="vehicle-slider slider-style-two owl-carousel" data-item="[1,1,1,1]">
            <div class="item row">
                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-11.jfif" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-10.jpg" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-12.jfif" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-13.jfif" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="clearfix"></div>

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-14.jpg" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-15.jpg" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-16.jpg" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-17.jfif" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.item -->

            <div class="item row">
                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-18.jpg" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-19.jfif" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-20.jpg" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-21.jpg" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="clearfix"></div>

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-22.jpg" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-23.png" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-24.jpg" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="vehicle-content theme-yellow">
                        <div class="vehicle-thumbnail">
                            <a href="#">
                                <img src="assets/images/popular/popular-25.webp" alt="car-item" />
                            </a>
                        </div><!-- /.vehicle-thumbnail -->
                        <div class="vehicle-bottom-content">
                            <h2 class="vehicle-title white"><a href="#">Toyota Aygo</a></h2>
                            <div class="vehicle-meta">
                                <div class="meta-item white">
                                    <span>Rent: $200 /</span> Day. - $12 / Km.
                                </div>
                            </div><!-- /.meta-left -->
                        </div><!-- /.vehicle-bottom-content -->
                    </div><!-- /.vehicle-content -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.item -->
        </div><!-- /.vehicle-slider -->

        <!-- block-navigation-area -->
        <div class="block-navigation-area visible-xs-block">
            <div class="view-all-item clearfix">
                <a href="#" class="view-all-btn">View all</a>
            </div><!-- /.view-all-item -->
        </div><!-- /.block-navigation-area -->
    </div><!-- /.container  -->
</div><!-- /.Regular-Vehicle Block -->



<!-- ======driver block======= -->
<div class="driver-block pd-90">
    <div class="container">
        <div class="row tb default-margin-bottom yellow-theme">
            <div class="col-md-9 block-title-area tb-cell">
                <div class="heading-content style-one border">
                    <h3 class="subtitle">Full Time and Part Time </h3>
                    <h2 class="title">Driver With Us</h2>
                </div><!-- /.heading-content-one -->
            </div><!-- /.col-md-10 -->

            <div class="col-md-3 hidden-xs block-navigation-area tb-cell">
                <div class="pull-right">
                    <div class="item-navigation">
                        <a href="#" class="previous-item">
                            <i class="fa fa-angle-left"></i>
                        </a>

                        <a href="#" class="next-item">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div><!-- /.item-navigation -->

                    <div class="view-all-item">
                        <a href="#" class="view-all-btn">View all</a>
                    </div><!-- /.view-all-item -->
                </div><!-- /.pull-right -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row -->

        <div class="driver-carousel slider-style-two owl-carousel" data-item="[4,2,2,1]">
            <div class="item">
                <div class="driver-content vehicle-content theme-yellow">
                    <div class="driver-thumb vehicle-thumbnail">
                        <a href="#">
                            <img src="assets/images/driver/driver-01.jpg" alt="car-item" />
                        </a>
                    </div><!-- /.vehicle-thumbnail -->
                    <div class="vehicle-bottom-content">
                        <h2 class="driver-name vehicle-title white"><a href="#">Mr. Johan Smith</a></h2>
                        <h4 class="driver-desc white">Full Time Work, Age 27</h4>
                    </div><!-- /.vehicle-bottom-content -->
                </div><!-- /.car-content -->
            </div><!-- /.item -->

            <div class="item">
                <div class="driver-content vehicle-content theme-yellow">
                    <div class="driver-thumb vehicle-thumbnail">
                        <a href="#">
                            <img src="assets/images/driver/driver-02.jpg" alt="car-item" />
                        </a>
                    </div><!-- /.vehicle-thumbnail -->
                    <div class="vehicle-bottom-content">
                        <h2 class="driver-name vehicle-title white"><a href="#">Mr. Johan Smith</a></h2>
                        <h4 class="driver-desc white">Full Time Work, Age 27</h4>
                    </div><!-- /.vehicle-bottom-content -->
                </div><!-- /.car-content -->
            </div><!-- /.item -->

            <div class="item">
                <div class="driver-content vehicle-content theme-yellow">
                    <div class="driver-thumb vehicle-thumbnail">
                        <a href="#">
                            <img src="assets/images/driver/driver-03.jpg" alt="car-item" />
                        </a>
                    </div><!-- /.vehicle-thumbnail -->
                    <div class="vehicle-bottom-content">
                        <h2 class="driver-name vehicle-title white"><a href="#">Mr. Johan Smith</a></h2>
                        <h4 class="driver-desc white">Full Time Work, Age 27</h4>
                    </div><!-- /.vehicle-bottom-content -->
                </div><!-- /.car-content -->
            </div><!-- /.item -->

            <div class="item">
                <div class="driver-content vehicle-content theme-yellow">
                    <div class="driver-thumb vehicle-thumbnail">
                        <a href="#">
                            <img src="assets/images/driver/driver-04.jpg" alt="car-item" />
                        </a>
                    </div><!-- /.vehicle-thumbnail -->
                    <div class="vehicle-bottom-content">
                        <h2 class="driver-name vehicle-title white"><a href="#">Mr. Johan Smith</a></h2>
                        <h4 class="driver-desc white">Full Time Work, Age 27</h4>
                    </div><!-- /.vehicle-bottom-content -->
                </div><!-- /.car-content -->
            </div><!-- /.item -->
        </div><!-- /.driver-carousel -->

        <!-- block-navigation-area -->
        <div class="block-navigation-area visible-xs-block">
            <div class="view-all-item clearfix">
                <a href="#" class="view-all-btn">View all</a>
            </div><!-- /.view-all-item -->
        </div><!-- /.block-navigation-area -->
    </div><!-- /.container  -->
</div><!-- /.driver-area -->

<!-- ====== App block ====== -->


<!-- ====== Company Brand Block ====== -->
<div class="company-brand-block">
    <div class="container">
        <div class="row tb default-margin-bottom yellow-theme">
            <!-- block-title-area -->
            <div class="col-md-9 block-title-area tb-cell">
                <div class="heading-content style-one border">
                    <h3 class="subtitle">Some Biggest Companys With us</h3>
                    <h2 class="title">Company with us</h2>
                </div><!-- /.heading-content-one -->
            </div><!-- /.col-md-9 -->

            <!-- block-navigation-area -->
            <div class="col-md-3 hidden-xs block-navigation-area tb-cell">
                <div class="item-navigation nav-right">
                    <a href="#" class="previous-item">
                        <i class="fa fa-angle-left"></i>
                    </a>

                    <a href="#" class="next-item">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div><!-- /.item-navigation -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->

        <div class="brand-carousel owl-carousel">
            <a href="#" class="item">
                <img src="assets/images/logo/logo-one.png" alt="logo" />
            </a>

            <a href="#" class="item">
                <img src="assets/images/logo/logo-two.png" alt="logo" />
            </a>

            <a href="#" class="item">
                <img src="assets/images/logo/logo-three.png" alt="logo" />
            </a>

            <a href="#" class="item">
                <img src="assets/images/logo/logo-four.png" alt="logo" />
            </a>

            <a href="#" class="item">
                <img src="assets/images/logo/logo-five.png" alt="logo" />
            </a>

            <a href="#" class="item">
                <img src="assets/images/logo/logo-six.png" alt="logo" />
            </a>

            <a href="#" class="item">
                <img src="assets/images/logo/logo-seven.png" alt="logo" />
            </a>
        </div><!-- /.brand-slider -->
    </div><!-- /.container -->
</div><!-- /.company-logo-block -->

<!-- ======blog area======= -->

<?php

include('./footer.php');
?>