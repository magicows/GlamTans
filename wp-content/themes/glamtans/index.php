<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cohort
 */

get_header(); ?>

<div id="slider">
    <?php echo do_shortcode('[rev_slider alias="classicslider"]'); ?>
</div>


<!-- Services -->
<section class="box-fancy section-fullwidth text-light p-b-0 p-t-0">
    <div class="row">
        <div class="col-md-4" style="background-color: rgb(255, 2, 139);">
            <h3>STANDING TANNING</h3>
            <span>In addition to delivering an even tan, stand-up tanning beds take less time than lay-down beds. Due to the bulbs being more intense, tanning time is a maximum of 10 minutes, whereas lay-down beds can be up to 15 minutes. <br/> <br/> One of the biggest reasons to consider a stand-up tanning solution is to gain coverage of every part of your body. Your body is surrounded in a stand-up bed, and during your session you can raise your arms or move to ensure proper coverage. </span>
        </div>

        <div class="col-md-4" style="background-color: rgb(183, 29, 112);">
            <h3>LAY DOWN TANNING</h3>
            <span>Lay-down tanning booths are very popular because they are known for relaxation. You can simply lay, rest, and tan in a matter of minutes. Overall, both versions of tanning beds are very effective and comfortable, making the choice entirely up to personal preference.<br/> <br/>In all cases, it is important to discuss your tanning goals with your salon’s tanning consultant to ensure you always tan safely. </span>
        </div>

        <div class="col-md-4" style="background-color: rgb(224, 52, 145);">
            <h3>GLAMNAILS</h3>
            <span>Let Glamtans style and shape your nails with their very own qualified Glamnails Technician. Nail services range from a Full Set application to Polish Removal, take a look at the pricing table below for more information.</span>
            <br>
            <br>
            <h3>SPRAY TANNING</h3>
            <span>Coming Soon! </span>
        </div>
    </div>
</section>
<!-- End of Services -->

<!-- FAQs -->
<section id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Pricing and General Information</h3>
                <p>See the pricing tables below for our competively priced offerings. If you have any questions about pricing, please <a href="#contact">get in touch</a>.</p>
                <div class="accordion toggle fancy radius clean">
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-gbp"></i>Single Session Pricing</h5>
                        <div style="display: block;" class="ac-content"><ul><li>50p per minute</li><li>3 minutes - £1.50</li><li>6 minutes - £3.00</li><li>9 minutes - £4.50</li><li>12 minutes - £6.00</li><li>15 minutes - £7.50</li></ul></div>
                    </div>
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-gbp"></i>Course Pricing</h5>
                        <div style="display: block;" class="ac-content"><ul><li>30 Minutes - £12.50</li><li>60 minutes - £20.00</li><li>90 minutes - £34.00</li></ul></div>
                    </div>
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-calendar"></i>Group Bookings</h5>
                        <div style="display: block;" class="ac-content">Group booking are available upon request. We can cater for Wedding and Prom parties so whichever your big day, why not get in touch using the form below.</div>
                    </div>
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-paint-brush"></i>Glamnails</h5>
                        <div style="display: block;" class="ac-content"><ul><li>Full Set - £20.00</li><li>Infills - £15.00</li><li>Nail Removal - £10.00</li><li>Nail Polish - £5+</li><li>Nail Gels - £18.00</li><li>Toe Polish - £5.00</li><li>Toe Gels - £15.00</li><li>Polish Removal - £4.00</li><li>Patterns - £4.00</li><li>Chrome Look - £2.50 per nail</li><li>Gems - £1.00 each</li><li>Cut Down - £3.50</li></ul></div>
                    </div>
                    <div class="ac-item ac-active">
                        <h5 class="ac-title"><i class="fa fa-sun-o"></i>Lotions and Product</h5>
                        <div style="display: block;" class="ac-content">We have a range of lotions and product available to purchase at the till during your visit. We offer the best brand sachets and bottles, with sachets starting from £2 each.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title"><i class="fa fa-exclamation-circle"></i>Over 18s only, Indentification may be required.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of FAQs -->

<!-- Start of Brands -->
<section style="padding-top: 0 !important;">
        <div class="hr-title hr-long center">
            <abbr>Brands</abbr>
        </div>
        <div class="carousel dots-grey carousel-loaded owl-carousel owl-theme owl-loaded" data-items="6" data-arrows="false">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s">
                    <div class="owl-item active" style="width: 190px; margin-right: 0px;">
                        <div>
                            <a href="#"><img alt="" src="wp-content/themes/glamtans/images/glam/logo1.png"> </a>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 190px; margin-right: 0px;">
                        <div>
                            <a href="#"><img alt="" src="wp-content/themes/glamtans/images/glam/logo2.jpg"> </a>
                        </div>
                    </div>
                    <div class="owl-item active" style="width: 190px; margin-right: 0px;">
                        <div>
                            <a href="#"><img alt="" src="wp-content/themes/glamtans/images/glam/logo3.jpg"> </a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End of Brands -->

<!-- Instagram -->
<section id="instagram" class="background-grey">
	<div class="container">
		<h3>Latest from our Instagram</h3>
		<div class="row insta">
				
				
				<?php
				
				// use this instagram access token generator http://instagram.pixelunion.net/
				// $access_token="TOKEN-GOES-HERE";
				$photo_count=3;
				     
				// $json_link="https://api.instagram.com/v1/users/self/media/recent/?";
				// $json_link.="access_token={$access_token}&count={$photo_count}";

				$json_link="https://www.instagram.com/glamtans.co.uk/media/";

				$json = file_get_contents($json_link);
				$obj = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);
				$i = 1;

				foreach ($obj['items'] as $post) if ($i++ <= $photo_count){
				     
				    $pic_text=$post['caption']['text'];
				    $pic_link=$post['link'];
				    $pic_like_count=$post['likes']['count'];
				    $pic_comment_count=$post['comments']['count'];
				    $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
				    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
				    // $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
				     
				    echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";        
				        echo "<a href='{$pic_link}' target='_blank'>";
				            echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
				        echo "</a>";
				        echo "<p>";
				            echo "<p>";
				                echo "<div style='color:#FF0080;'>";
				                	echo "<span class='album-numbers'>{$pic_like_count} <i class='fa fa-heart'></i> </span>";
				                    	echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
				                echo "</div>";
				            echo "</p>";
				            echo "<p>{$pic_text}</p>";
				        echo "</p>";
				    echo "</div>";

				};

				?>
                <?php wp_reset_query(); ?>
		</div>
	</div>
</section>
<!-- End of Instragram -->

<!-- Google Map -->
<section class="no-padding" data-height-lg="500" data-height-xs="200" data-height-sm="300">
    <!-- Google map sensor -->
    <div id="map"></div>
    <style>
	 #map {
	   width: 100%;
	   height: 400px;
	   background-color: grey;
	 }
	</style>
    <script>
      function initMap() {
        var uluru = {lat: 52.471536, lng: -2.083220};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZi0qBUJad0wCnmKh6JRkvC5OzdbPNPJw&callback=initMap">
    </script>
</section>
<!-- end: Google Map -->

<!-- Contact Content -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-uppercase">Booking &amp; Getting In Touch</h3>
                <p>Please use this contact form to get in touch with us about making a booking or for any other general enquiries. One of our friendly staff members will look to handle your enquiry as soon as possible. Alternatively, you can contact the salon via telephone on 07388472614</p>


                <div class="row m-t-40">
                    <div class="col-md-6">
                        <address>
                        	<strong>Salon Address:</strong><br> 
                            <br> 
                        	Glamtans<br> 
                            14 Market Square, Cradley Heath<br> 
                            West Midlands<br>
                            B645HH<br>
                            <br>
                            <abbr title="Phone">P:</abbr> <a href="tel:+447388472614">07388472614</a><br>
                            <abbr title="Email">E:</abbr> <a href="mailto:contact@glamtans.co.uk">contact@glamtans.co.uk</a>
   						</address>
                    </div>
                    <div class="col-md-6">
                        <address>
	  						<strong>Opening Hours:</strong><br>
                            <br> 
                            Monday - Saturday<br>
                            10:00 AM - 8:00 PM<br>
                            <br>
                            Sunday<br>
                            11:00 AM - 5:00 PM</p>
	                   </address>
                    </div>
                </div>

                <div class="social-icons m-t-30 social-icons-colored clearfix">
                    <ul>
                        <li class="social-facebook"><a href="https://www.facebook.com/glamtanscradleyheath/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="https://twitter.com/glamtansuk" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="social-instagram"><a href="https://www.instagram.com/glamtans.co.uk" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
            	<?php echo do_shortcode('[contact-form-7 id="72" title="Contact form 1"]'); ?>      
            </div>
        </div>
    </div>
</section>
<!-- end: Contact Content -->

<?php
get_footer();
?>
