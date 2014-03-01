<?php
/*
Template Name: Contact
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="content contact">
<div class="grid">
<h2>Contact</h2>
<div class="col">
	<div class="left-contact col-1-2">
		<h3>Old Fashioned Way</h3>
		<div class="contact-info">
			<h4>970-497-9001</h4>
			<h4>Durangoshadecompany@gmail.com</h4>
		</div>
	</div>
	<div class="right-contact col-1-2">
		<h3>Contact with Web Magic</h3>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>

</div>			
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>