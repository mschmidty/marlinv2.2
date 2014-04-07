<?php
/*
Template Name: Home Page
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
			<div class="home-banner">
        		<img src="<?php echo get_template_directory_uri(); ?>/images/banner-home.jpg" alt="photo by Insolroll">
                <div class="promotion">
                    <h3>April Only</h3>
                    <a href="#">$50 OFF</a>
                    <h4>For Every $300 You Spend</h4>
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
                        <p>We want to give back to the community that supports us! A portion of our profits go to support local customer recommended causes.</p>
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
            <div class="cause-wrap">
                <h3 class="cause-title">2014 1st Quarter Donation Goes To:</h3>
                <a href="http://www.alternativehorizons.org/">
                    <div class="cause-image">
                        <img src="http://www.alternativehorizons.org/ah/includes/themes/altHor/images/AlternativeHorizons-logo-ta.jpg" alt="Alternative Horizons" />
                    </div>
                </a>    
                <p>We are excited to support Alternative Horizons as our CAUSE for our 1st quarter 2014 Donation. Alternative Horizons provides free, confidential support and alternatives to survivors of domestic violence and their families. We will donate %3 of our profits this month. To find out more about what they do click <a class="cause-link" href="http://www.alternativehorizons.org/">HERE</a></p> 
            </div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>