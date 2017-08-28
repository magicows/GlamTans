        <!-- PRE-FOOTER -->
<!--         <section id="section-contact" class="background-grey p-t-40 p-b-0">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fa fa-clock-o"></i></a>
                            </div>
                            <h3>Working Days</h3>
                            <p><strong>Monday - Friday</strong>
                                <br>10:00 AM - 11:00 PM</p>
                            <p><strong>Saturday - Sunday</strong>
                                <br>10:00 AM - 04:00 PM</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                            </div>
                            <h3>Location</h3>
                            <p><strong>Salon Address:</strong>
                            	<br> Glamtans
                                <br> 14 Market Square
                                <br> Cradley Heath
                                <br> West Midlands, B645HH
                                <br>
                            </p>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fa fa-phone"></i></a>
                            </div>
                            <h3>Contact</h3>
                            <p><strong>Phone:</strong>
                                <br> (0121) 456-7890
                                <br> (+44) 7729 38851
                                <br>
                            </p>
                            <p><strong>Email:</strong>
                            	<br> contact@glamtans.co.uk
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end: PRE-FOOTER -->

        <!-- FOOTER -->
        <footer class="background-grey" id="footer">
            <div class="copyright-content">
                <div class="container">
                    <div class="row">
                        <div class="copyright-text text-center"> &copy; <?php echo date(Y); ?> GLAMTANS. All Rights Reserved. Built by <a href="http://twitter.com/samfitzpatrick" target="_blank">Sam Fitzpatrick</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: FOOTER -->
    </div>
    <!-- end: Wrapper -->


    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/glamtans/js/plugins/revolution/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/glamtans/js/plugins/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/glamtans/js/plugins/revolution/css/navigation.css">

    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/glamtans/js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <script type="text/javascript">
        var tpj = jQuery;

        var revapi22;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_22_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_22_1");
            } else {
                revapi22 = tpj("#rev_slider_22_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "js/plugins/revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "vertical",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%"
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "single",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
            $(function() {
                $('.box-fancy .col-md-4').matchHeight();
            });
            var $root = $('html, body');
            $('a').click(function() {
                $root.animate({
                    scrollTop: $( $.attr(this, 'href') ).offset().top
                }, 500);
                return false;
            });


            $window = $(window);
            $header = $('#header');
            $body = $('body');
            $("#mainMenu-trigger button").on('click touchend', function (e) {
                $body.toggleClass("mainMenu-open");
                $(this).toggleClass("toggle-active");
                if ($body.hasClass("mainMenu-open")) {
                    $header.find("#mainMenu").css("max-height", $window.height() - $header.height());
                } else {
                    $header.find("#mainMenu").css("max-height", 0);
                }
                return false;
            });
        }); /*ready*/

    </script>
    
    <?php wp_footer(); ?>
</body>

</html>