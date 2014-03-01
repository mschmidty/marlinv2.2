<?php
/*
Template Name: Home Page
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
			<div class="home-banner">
        		<img src="<?php echo get_template_directory_uri(); ?>/images/banner-home.jpg" alt="photo by Insolroll">
                <div class="promotion">
                    <h3>February Only</h3>
                    <a href="#">15% OFF</a>
                    <h4>All Automatic Systems</h4>
                </div>
            </div>
            <div class="pic-tag">
                <p>Photo by Insolroll</p>
            </div>
            <div class="content home">
                <div class="grid">
                    <div class="col col-1-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/for-cause.png">
                        <h3>For Your Cause</h3>
                        <p>We wanna give back to the community that supports us! A portion of our profits got to support local customer recomended cuases.</p>
                    </div>
                    <div class="col col-1-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/colorado-flag.jpg">
                        <h3>Local</h3>
                        <p>Durango Shade Company offers at home consultation for motorized and manual window shades.  Our shades are great for both commercial and residential applications.</p>
                    </div>
                    <div class="col col-1-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png">
                        <h3>Give us a call!</h3>
                        <p>Contact us by phone:970-497-9001 to set up a free consultation. We want to help you give your home that fresh new look.</p>
                    </div>
                </div>
            </div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>