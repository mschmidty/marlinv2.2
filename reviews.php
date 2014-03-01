<?php
/*
Template Name: Review
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="content review"><div class="grid">
<h2>Reviews</h2>
	<?php
 
    $custom_query = new WP_Query(array(
        'posts_per_page' => 10,
        'cat' => '4',
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
    ));
    
    if ( $custom_query->have_posts() ) :
	                while ( $custom_query->have_posts() ) : $custom_query->the_post();
	                	echo '<div class="border">';
	                	echo '<div class="col col-1-2">';  
	                	echo '<h3>' . get_the_title() . '</h3>';                  
	                    echo '<p>' . the_content() .'</p>';
	                   	echo '</div>';
	                   	echo '<div class="col col-1-2">'; 
	                	echo the_post_thumbnail();
	                   	echo '</div></div>';
	                endwhile;
	                wp_reset_query();
                    endif;
 
	?>	
</div></div>
			

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>