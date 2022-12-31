<?php
include('./header.php');
include('./config.php')
?>
<!-- ====== Available Available Block ====== -->
<div class="available-block vehicle-padding bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-9 col-sm-9 clearfix">
                        <h2 class="available-title">Available Vehicles</h2>
                    </div><!-- /.col-md-9 -->
                    <div class="col-md-3 col-sm-3">
                        <div class="vehicle-category pull-right">
                            <select name="vehicle-category" id="vehicle-cat-list">
                                <option value="volvo">filters</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div><!-- /.vehicle-category -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->

                <div class="row mt-4">
                    <?php
                    $cars = mysqli_query($con, " SELECT * FROM `cars`");
                    // echo $cars;
                    foreach ($cars as $GETcars) {
                        $splitbycoma = explode(',', $GETcars['images']);
                    ?>
                        <div class="col-md-4 col-sm-6">
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
                        </div>
                    <?php
                    }
                    ?>
                    
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-md-12 clearfix">
                        <div class="pagination-link">
                            <ul class="pagination">
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                                <li><a href="#">05</a></li>
                                <li><span class="pages-number-dots">...</span></li>
                                <li><a href="#">12</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div><!-- /.pagination -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.col-md-9 -->

            <div class="col-md-3">
                <div class="vehicle-sidebar">
                    <form action="#" method="get" class="advance-search-query">
                        <h2 class="form-title">Filters</h2>
                        <div class="form-content available-filter">
                            <div class="form-group">
                                <div class="input">
                                    <input type="text" placeholder="quick search" class="calendar form-controller">
                                </div>
                                <!--/.input-->
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label>Available On</label>
                                <div class="input">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" class="date-start  date-selector form-controller" placeholder="Hire On">
                                </div>
                                <!--/.input-->
                                <div class="input">
                                    <i class="fa fa-calendar"></i>
                                    <input type="text" class="date-end date-selector form-controller" placeholder="Return On">
                                </div>
                                <!--/.input-->
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label>Price</label>
                                <div class="input">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="text" placeholder="$12" class="calendar form-controller min">
                                        </div><!-- /.col-xs-6 -->
                                        <div class="col-xs-6">
                                            <input type="text" placeholder="$1500" class="calendar form-controller">
                                        </div><!-- /.col-xs-6 -->
                                    </div><!-- /.row -->
                                </div>
                                <!--/.input-->
                            </div><!-- /.form-group -->

                            <div class="advance-filters">
                                <label>Car Type</label>
                                <ul class="checkbox-content">
                                    <li>
                                        <input type="checkbox" id="cupon" name="chack" value="chack">
                                        <label for="cupon">Coupe</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="limo" name="chack" value="chack">
                                        <label for="limo">Limo</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="sedan" name="chack" value="chack">
                                        <label for="sedan">Limo</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="van" name="chack" value="chack">
                                        <label for="van">Van</label>
                                    </li>
                                </ul>

                                <label>Categories</label>
                                <ul class="checkbox-content">
                                    <li>
                                        <input type="checkbox" id="compact" name="chack" value="chack">
                                        <label for="compact">Compact</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="family" name="chack" value="chack">
                                        <label for="family">Family</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="full-size-1" name="chack" value="chack">
                                        <label for="full-size-1">Full size</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="intermediate" name="chack" value="chack">
                                        <label for="intermediate">Intermediate</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="mini-1" name="chack" value="chack">
                                        <label for="mini-1">Mini</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="standard-1" name="chack" value="chack">
                                        <label for="standard-1">Standard</label>
                                    </li>
                                </ul>

                                <label>Car Brands</label>
                                <ul class="checkbox-content">
                                    <li>
                                        <input type="checkbox" id="astonmartin-1" name="chack" value="chack">
                                        <label for="astonmartin-1">Astonmartin</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="audi-1" name="chack" value="chack">
                                        <label for="audi-1">Audi</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="ford-1" name="chack" value="chack">
                                        <label for="ford-1">Ford</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="maruti-1" name="chack" value="chack">
                                        <label for="maruti-1">Maruti</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="mercedes-benz-1" name="chack" value="chack">
                                        <label for="mercedes-benz-1">Mercedes-Benz</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="terasa-1" name="chack" value="chack">
                                        <label for="terasa-1">Terasa</label>
                                    </li>
                                </ul>

                                <label>Car Models</label>
                                <ul class="checkbox-content">
                                    <li>
                                        <input type="checkbox" id="audi-2007-model-1" name="chack" value="chack">
                                        <label for="audi-2007-model-1">Audi 2007 model</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="audi-a9-1" name="chack" value="chack">
                                        <label for="audi-a9-1">Audi A9</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c-class-sedan-1" name="chack" value="chack">
                                        <label for="c-class-sedan-1">C-Class Sedan</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="ford-t-van" name="chack" value="chack">
                                        <label for="ford-t-van">Ford T Van</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="maruti-2008-model-1" name="chack" value="chack">
                                        <label for="maruti-2008-model-1">Maruti 2008 Model</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="terasa--2007-1" name="chack" value="chack">
                                        <label for="terasa--2007-1">Teresa 2007</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="filter-button">
                                <a href="#" class="button nevy-bg">Filter</a>
                                <a href="#" class="button nevy-bg">Reset</a>
                            </div><!-- /.filter-button -->
                        </div><!-- /.from-cotent -->
                    </form><!-- /.advance_search_query -->
                </div><!-- /.vehicle-sidebar -->
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container  -->
</div><!-- /.Popular Vehicle Block -->

<!-- ======footer area======= -->
<?php
include('./footer.php')
?>