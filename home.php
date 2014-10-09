<?php
/*
Template Name: Home Page
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
			<div class="home-banner">
        		<img src="<?php echo get_template_directory_uri(); ?>/images/banner-home1.jpg" alt="photo by Insolroll">
                <div class="promotion">
                    <p>"Marlin was extremely responsive and handled everything without requiring my involvement or time. The blinds he chose look great and the installation is top quality. I would highly recommend using Durango Shade Company!"</p>
                    <h5>-Vivian Homza</h5>
                </div>
            </div>
            <div class="content home">
                <div class="grid">
                    <div class="col col-1-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/house.png">
                        <h3>Free Estimates</h3>
                        <p>Durango Shade Company offers at home consultation for motorized and manual window shades.  Our shades are great for both commercial and residential applications.</p>
                    </div>
                    <div class="col col-1-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/colorado-flag.jpg">
                        <h3>Professional Service</h3>
                        <p>We take great pride in offering only quality products and professional services. We work hard to make your dream a reality.</p>
                    </div>
                    <div class="col col-1-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/for-cause.png">
                        <h3>For Your Cause</h3>
                        <p>Your purchase with Durango Shade Company will support the community. We donate a portion of our profits to customers recommended Causes.</p>
                    </div>
                </div>
            </div>
            <div class="cause-wrap">
                <h3 class="cause-title">2014 3rd Quarter Donation Goes To:</h3>
                <a href="http://www.asadurango.org/">
                    <div class="cause-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/adaptive_sports.jpg" alt="St. Jude Childrens Hospital Logo" />
                    </div>
                </a>    
                <p>Adaptive Sports Association of Durango helps enhance the lives of people with disabilities. Through sports and recreational programs, ASA works with students to overcome their physical and cognitive challenges. You can find them online at <a href="http://www.asadurango.com">www.asadurango.com</a></p> 
            </div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>