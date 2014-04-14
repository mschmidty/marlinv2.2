<?php
/*
Template Name: Interior
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="content interior new">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="grid"> 
		<h2><?php the_title(); ?></h2>
	</div>
	<?php endwhile; ?>
	<?php rewind_posts(); ?>
	<?php
 
    $custom_query = new WP_Query(array(
        'cat' => 6,
        'posts_per_page' => 10,
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
    ));
 

if ( $custom_query->have_posts() ) :
	                while ( $custom_query->have_posts() ) : $custom_query->the_post();
	echo '<div class="grid">';
	echo	'<div class="col col-1-2">';
	echo		'<div class="products-thumb">'; 
	echo			the_field('field_name'); 
	echo		'</div>';
	echo		'<h2>' . the_title(); . '</h2>';
	echo		'<p>' . the_field('field_name'); . '</p>';
	echo	'</div>';
	echo'</div>';


	 endwhile;
	wp_reset_query();
    endif;
    ?>

    <div class="grid">
    	<div class="col col-1-3">
    		<div class="products-thumb">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/products-exterior.jpg" alt="alt text">
    		</div>
    			<h4>Oasis Shade System</h4>
      			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    	</div>
    	<div class="col col-1-3">
    		<div class="products-thumb">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/products-exterior.jpg" alt="alt text">
    		</div>
    			<h4>Oasis Shade System</h4>
      			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    	</div>
    	<div class="col col-1-3">
    		<div class="products-thumb">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/products-exterior.jpg" alt="alt text">
    		</div>
    			<h4>Oasis Shade System</h4>
      			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    	</div>
    	<div class="col col-1-3">
    		<div class="products-thumb">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/products-exterior.jpg" alt="alt text">
    		</div>
    			<h4>Oasis Shade System</h4>
      			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    	</div>
    	<div class="col col-1-3">
    		<div class="products-thumb">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/products-exterior.jpg" alt="alt text">
    		</div>
    			<h4>Oasis Shade System</h4>
      			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    	</div>
    	<div class="col col-1-3">
    		<div class="products-thumb">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/products-exterior.jpg" alt="alt text">
    		</div>
    			<h4>Oasis Shade System</h4>
      			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    	</div>
    </div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>