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

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>