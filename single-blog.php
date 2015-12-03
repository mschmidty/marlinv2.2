<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="content blog-single">
  <article class="grid">
    <h2>Blog</h2>
    <div class="blog-single-article">
      <h1><?php the_title(); ?></h1>
    
      <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> 
      <?php the_content(); ?>     

      <?php if ( get_the_author_meta( 'description' ) ) : ?>
      <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
      <h3>About <?php echo get_the_author() ; ?></h3>
      <?php the_author_meta( 'description' ); ?>
      <?php endif; ?>
      <?php endwhile; ?>
    </div>  <!--blog-single-article-->
  </article> <!--grid-->
</div> <!--content blog-->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
