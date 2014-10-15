<?php
/*
Template Name: Products-New
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="content new products-new">
	<div class="grid">
		<h2>Products</h2> 
		<div class="products-wrap">
			<div class="col col-1-3">
				<a href="index.php?page_id=140"><div class="products-thumb">
    				<img src="<?php echo get_template_directory_uri(); ?>/images/products-interior-roller.jpg" alt="photo by Insolroll"/>
  				</div></a>
  				<a class="title-link" href="index.php?page_id=140"><h4>Roller Shades</h4></a>
  				<p>Premium, high quality roller shades designed for interior applications. Available in a verity of colors and fabric openness.</p>
  				<a class="product-margin-after-link" href="index.php?page_id=140">See More Roller Shade Options</a>
			</div>
			<div class="col col-1-3">
				<a href="index.php?page_id=142"><div class="products-thumb">
    				<img src="<?php echo get_template_directory_uri(); ?>/images/products-interior-cellular.jpg" alt="photo by Insolroll"/>
  				</div></a>
  				<a class="title-link" href="index.php?page_id=142"><h4>Cellular Shades</h4></a>
  				<p>High Quality cellular shades designed for interior applications.  Available in 3 cell sizes and 4 different opacity levels.</p>
  				<a  href="index.php?page_id=142">See More Cellular Shade Options</a>
			</div>
			<div class="col col-1-3">
				<a href="index.php?page_id=115"><div class="products-thumb">
    				<img src="<?php echo get_template_directory_uri(); ?>/images/products-exterior.jpg" alt="photo by Insolroll"/>
  				</div></a>
  				<a class="title-link" href="index.php?page_id=115"><h4>Exterior Shades</h4></a>
  				<p>Premium solar screen and heavy-duty insect screen systems designed for exterior applications. Available in both motorized and manual operation.</p>
				<a href="index.php?page_id=115">See More Exterior Shade Options</a>
			</div>
			<div class="col col-1-3">
				<a href="index.php?page_id=283"><div class="products-thumb">
    				<img src="<?php echo get_template_directory_uri(); ?>/images/horizontal-blinds.jpg" alt="photo by Insolroll"/>
  				</div></a>
  				<a class="title-link" href="index.php?page_id=283"><h4>Horizontal Blinds</h4></a>
  				<p>We have a great selection of premium wood, metal and wood alternative blinds. All made in the USA.</p>
				<a href="index.php?page_id=283">See More Horizontal Blind Options</a>
			</div>
			<div class="col col-1-3">
				<a href="#"><div class="products-thumb">
    				<img src="<?php echo get_template_directory_uri(); ?>/images/sorenta-swatch.jpg" alt="photo by Insolroll"/>
  				</div></a>
  				<a class="title-link" href="#"><h4>Sorenta Fabric Blinds</h4></a>
  				<p>Lightweight, stain resistant and are available in 5 different patterns and 38 different colors.</p>
				<a href="#">See More Sorenta Fabric Blind Options</a>
			</div>
			<div class="col col-1-3">
				<a href="#"><div class="products-thumb">
    				<img src="<?php echo get_template_directory_uri(); ?>/images/natural-shade-swatch.jpg" alt="photo by Insolroll"/>
  				</div></a>
  				<a class="title-link" href="#"><h4>Natural Shades</h4></a>
  				<p>Graber Natural Drapes are made from organic, renewable resources and come in a variety of colors and textures.</p>
				<a href="#">See More Natural Shade Options</a>
			</div>
			<div class="col col-1-3">
				<a href="#"><div class="products-thumb">
    				<img src="<?php echo get_template_directory_uri(); ?>/images/shutters-swatch.jpg" alt="photo by Insolroll"/>
  				</div></a>
  				<a class="title-link" href="#"><h4>Shutters</h4></a>
  				<p>Made from 100% North American hardwood, Graber Traditions Shutters are high quality and easy to customize.</p>
				<a href="#">See More Shutter Options</a>
			</div>
		</div>
	</div>	
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>