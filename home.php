<?php
/*
Template Name: Home Page
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
			<div class="home-banner">
        		<img src="<?php echo get_template_directory_uri(); ?>/images/banner-home.jpg" alt="photo by Insolroll">
            </div>
            <div class="pic-tag">
                <p>Photo by Insolroll</p>
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
                <h3 class="cause-title">2014 2nd Quarter Donation Goes To:</h3>
                <a href="http://www.stjude.org/">
                    <div class="cause-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/stjude.jpg" alt="St. Jude Childrens Hospital Logo" />
                    </div>
                </a>    
                <p>Our 2nd quarter donation went to St Jude Children's Hospital. A  treatment and research facility devoted to help children with catastrophic diseases. You can learn more about them at <a class="cause-link" href="http://www.stjude.org/">www.stjude.org</a></p> 
            </div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>