<?php
/*
Template Name: Blog
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="content blog">
	<div class="grid">
		<h2>Blog</h2>

<?php 
	$blog_query = new WP_Query(array(
			'post_type' => 'blog',
			'posts_per_page' => 10
	)); 

	if($blog_query->have_posts()) : 
		while($blog_query->have_posts()) : $blog_query->the_post();
?>

	<h3><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

	<p> <?php echo the_excerpt() ?></p>
	<a href="<?php echo get_permalink(); ?>"> Read More...</a>


<?php 
	endwhile;
	endif;
 ?>

 </div> <!-- content -->
</div> <!-- grid -->



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>