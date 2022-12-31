<?php
?>

<!-- ======footer area======= -->
<div class="container footer-top-border">
</div><!-- /.container -->

<style>
    .widget-about-content img {
        width: 236px !important;
        display: block;
        margin-bottom: 30px;
    }
</style>
<footer class="footer-block bg-black" style="background-image: url(assets/images/footer-bg.png);">
    <div class="container">
        <!-- footer-top-block -->
        <div class="footer-top-block yellow-theme">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="widget widget_about">
                        <h3 class="widget-title">
                            About us
                        </h3><!-- /.widget-title -->
                        <div class="widget-about-content">
                            <img src="assets/images/car-logo-2.png" class="w-25" width="236px " alt="logo" />
                            <p>We Provide Premium Word Press, Ghost and HTML template. Our Prem tjium Templates is,
                                develo gped in a way so that the clients find Support. Themes are developed in a way
                                so that the clients find.</p>
                            <a href="#" class="button">More</a>
                        </div><!-- /.widget-content -->
                    </div><!-- /.widget widget_about -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_menu">
                        <h3 class="widget-title">
                            Useful link
                        </h3><!-- /.widget-title -->
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> Get a cab</a></li>
                            <li><a href="#">Our car</a></li>
                            <li><a href="#">Contact page</a></li>
                            <li><a href="#">Reviews</a></li>
                            <li><a href="#"> Booking</a></li>
                            <li><a href="terms.php"> Terms & Conditions</a></li>
                            <li><a href="privacypolicy.php"> Privacy Policy</a></li>
                        </ul>
                    </div><!-- /.widget -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-6">
                    <div class="widget widget_hot_contact">
                        <h3 class="widget-title">
                            Hot contact
                        </h3><!-- /.widget-title -->
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i>example@domain.com</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>(+880)023985471</a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i>Road 8A, 112/B, Australia</a></li>
                        </ul>
                    </div><!-- /.widget -->
                    <div class="widget widget_newsletter">
                        <h3 class="widget-title">Subscribe</h3>
                        <form action="#" class="subscribes-newsletter" method="get">
                            <label>Subscribe to our Newsletters</label>
                            <div class="input-group">
                                <input type="search" name="s" placeholder="Your email" class="form-controller">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-paper-plane"></span>
                                    </button>
                                </span>
                            </div><!-- /. input-group -->
                        </form><!-- /.subscribes-newsletter -->
                    </div><!-- /.widget -->
                </div><!-- /.col-md-3 -->

                <!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.footer-top-block -->

        <!-- footer-bottom-block -->
        <div class="footer-bottom-block">
            <div class="row">
                <div class="col-md-9">
                    <div class="bottom-content-left">
                        <p class="copyright">Copyright &copy; 2017 SoftHopper - All Right Reserved </p>
                    </div><!-- /.bottom-top-content -->
                </div><!-- /.col-md-9 -->
                <div class="col-md-3">
                    <div class="bottom-content-right">
                        <div class="social-profile">
                            <span class="social-profole-title">Follow Us:</span>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div><!-- /.social-profile -->
                    </div><!-- /.bottom-content-right -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.footer-bottom-block -->
    </div><!-- /.container -->
</footer><!-- /.footer-block -->

<!-- All The JS Files
    ================================================== -->
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/carrent.min.js"></script> <!-- main-js -->

<!-- RS5.4 Core JS Files -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script>
    jQuery(document).ready(function() {
        var $sliderSelector = jQuery(".carrent-slider");
        $sliderSelector.revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            delay: 9000,
            navigation: {
                keyboardNavigation: "on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "on",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "gyges",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    }
                }
            },
            responsiveLevels: [1400, 1368, 992, 480],
            visibilityLevels: [1400, 1368, 992, 480],
            gridwidth: [1400, 1368, 992, 480],
            gridheight: [600, 600, 500, 380],
            disableProgressBar: "on"
        });
    });
</script>

<!-- SLIDER REVOLUTION 5.4 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<!-- bootstrap 5 -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

<!-- Mirrored from htmlguru.net/carrent-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 12:21:44 GMT -->

</html>