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
            <div class="content">
                <div class="grid">
                    <div class="col col-1-3">
                        <h3>Local</h3>
                        <p>Durango Shade Company offers at home consultation for motorized and manual window shades.  Our shades are great for both commercial and residential applications.</p>
                    </div>
                    <div class="col col-1-3">
                        <h3>Insolroll</h3>
                        <p>We have an array of fabrics, from full black out to semi-translucent privacy shades.  We also offer the famous solar screen fabrics by <a href="http://wwww.insolroll.com">Insolroll</a> that give you protection from the sun but don't block out your view.</p>
                    </div>
                    <div class="col col-1-3">
                        <h3>Give us a call!</h3>
                        <p>Contact us by phone:970-497-9001 to set up a free consultation. We want to help you give your home that fresh new look.</p>
                    </div>
                </div>
            </div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>