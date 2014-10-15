<?php
/*
Template Name: products-description
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="content review"><div class="grid">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<div class="col col-1-2">
		<?php the_content(); ?>
	</div>
	<div class="col col-1-2">
		<?php the_post_thumbnail(); ?>
	</div>	
	<?php endwhile; ?>
</div></div>
			

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>