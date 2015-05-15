<?php
/*
Template Name: Home Page
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
			<div class="home-banner">
        		<img src="<?php echo get_template_directory_uri(); ?>/images/banner-home1.jpg" alt="photo by Insolroll">
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    $homeQuote = get_field('home_quote');
                    $homeQuoteAuthor = get_field('home_quote_author');

                    $couponTime = get_field('coupon_time');
                    $couponAmount = get_field('coupon_amount');
                    $couponCategory = get_field('coupon_category');

                    $miscTitleHome  = get_field('misc_title_home');
                    $miscAddInfo = get_field('misc_add_info');
                    $miscImage = get_field('misc_upload_image');
                ?>
                
                <div class="promotion">
                    <?php 
                    if($homeQuote){
                    ?>
                    <p> "<?php echo $homeQuote?>" </p>
                    <h5> - <?php echo $homeQuoteAuthor?></h5>
                    <?php
                    }
                    else {
                    ?>
                    <h5> <?php echo $couponTime ?></h5>
                    <h3><?php echo $couponAmount ?></h3>
                    <h5><?php echo $couponCategory ?></h5>
                    <?php 
                    } ?>

                </div>
            </div>
            <div class="content-padding content content home">
                <div class="grid services">
                    <div class="col col-1-3">
                        <img src=" <?php echo get_template_directory_uri(); ?>/images/house.png">
                        <h3>Free Estimates</h3>
                        <p>We provide the best at-home shopping experience for window coverings and blinds in Durango Colorado. Our unmatched mobile showroom makes it easy for you to compare products, see samples and pick out the best window coverings for your home.</p>
                    </div>
                    <div class="col col-1-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/colorado-flag.jpg">
                        <h3>Professional Service</h3>
                        <p>We take great pride in offering only high quality products and professional service.  Most of our window coverings and blinds are backed by limited lifetime warranties and we stand behind our products 100%. You know you are only getting the best. </p>
                    </div>
                    <div class="col col-1-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/for-cause.png">
                        <h3>For Your Cause</h3>
                        <p>When you buy window coverings and blinds from Durango Shade CO, you are helping build a better community! Our tagline says it all “Window Coverings For A Cause”.  We Donate 3% of our profits to customer recommend Causes.</p>
                    </div>
                </div>
            </div>
            <section class="home-misc-section">
                <div class="home-misc-head">
                    <h3><?php echo $miscTitleHome ?></h3>
                    <p><?php echo $miscAddInfo ?></p>
                </div>
                <?php 
                    if(!empty($miscImage)):
                    echo '<img src="' . $miscImage['url'] . '"alt="' .$miscImage['alt'] . '"/>';
                    endif; 
                ?>
            </section>
            <?php
                endwhile; else :// end while
                endif; // end if
            ?>
            <?php wp_reset_postdata(); ?>

            <?php $cause_query = new WP_Query( array(
                    'post_type' => 'cause', 
                    'posts_per_page' => 1
                )); ?>
            <?php 
            if ($cause_query->have_posts() ) :
            while($cause_query->have_posts()) : $cause_query->the_post(); ?>
                <?php  
                $causeTitle = get_the_title();
                $causeLink  = get_field('cause_link');
                $causeLogo = get_field('cause_logo');
                $causeDescription = get_field('cause_description');
                ?>
                <div class="cause-wrap">
                    <h3 class="cause-title"> <?php echo $causeTitle ?> </h3>
                    <a href="<?php echo $causeLink ?> ">
                        <div class="cause-image">
                            <?php 
                            if(!empty($causeLogo)):
                            echo '<img src="' . $causeLogo['url'] . '"alt="' . $cuaseLogo['alt'] . '"/>';
                            endif; ?>
                        </div>
                    </a> 
                    <p><?php echo $causeDescription ?></p>   
                </div>
            <?php endwhile; endif; ?>
            

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>