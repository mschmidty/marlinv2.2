<?php
/*
Template Name: Products-New
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="content new">
	<div class="grid">
		<h2>Products</h2> 
		<div class="products-wrap">
			<div class="col col-1-4 product-type">
				<h3>Interior <br>Shades</h3>
			</div>
			<div class="col col-3-4">
				<div class="col col-1-2">
					<div class="products-thumb">
        				<img src="<?php echo get_template_directory_uri(); ?>/images/products-interior-roller.jpg" alt="photo by Insolroll"/>
      				</div>
      				<h4>Roller Shades</h4>
      				<p>Premium, high quality roller shades designed for interior applications. Available in a verity of colors and fabric openness.</p>
      				<a href="index.php?page_id=140">Go To Roller Shades Page</a>
				</div>
				<div class="col col-1-2">
					<div class="products-thumb">
        				<img src="<?php echo get_template_directory_uri(); ?>/images/products-interior-cellular.jpg" alt="photo by Insolroll"/>
      				</div>
      				<h4>Cellular Shades</h4>
      				<p>High Quality cellular shades designed for interior applications.  Available in 3 cell sizes and 4 different opacity levels.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="grid">	
		<div class="products-wrap">
			<div class="col col-1-4 product-type">
				<h3>Exterior <br>Shades</h3>
			</div>
			<div class="col col-3-4">
				<div class="col col-1-2 exterior">
					<div class="products-thumb">
        				<img src="<?php echo get_template_directory_uri(); ?>/images/products-exterior.jpg" alt="photo by Insolroll"/>
      				</div>
      				<h4>Oasis Shade System</h4>
      				<p>Premium solar screen and heavy-duty insect screen systems designed for exterior applications. Available in both motorized and manual operation.</p>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>