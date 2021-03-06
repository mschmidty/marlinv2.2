<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {

		wp_register_script('new_service', get_stylesheet_directory_uri() . '/js/modernizr.js', array('jquery'), false, false);
    	wp_enqueue_script ('new_service');

		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ), false, '', true);
		wp_enqueue_script( 'site');


		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen');
        wp_enqueue_style( 'screen');
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}

	/* ========================================================================================================================
	
	More
	
	======================================================================================================================== */

	/* Disable the Admin Bar. */
	add_filter( 'show_admin_bar', '__return_false' );

	// Drop this in functions.php or your theme
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), false, '1.3.2');
		wp_enqueue_script('jquery');
	}

	/* Enables Menu's */
	function register_my_menu() {
  	register_nav_menu('header-menu',__( 'Header Menu' ));
		}
	add_action( 'init', 'register_my_menu' );

	// Remove Gallery Styling

	add_filter( 'use_default_gallery_style', '__return_false' );

	// Images

	add_theme_support( 'post-thumbnails' );
	add_image_size('thumb-img', 300, 200, array('center', 'center'));
	add_image_size('large', 1500);
	add_image_size('medium', 1000);
	add_image_size('small', 700);
	add_image_size('xsmall', 500);



