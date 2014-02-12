
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<div id="outer-wrap">
	<div id="inner-wrap">
		<div class="page-wrap">
			<header id="top" role="banner">
				<div class="logo">
					<a class="header-logo" href="<?php echo home_url(); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>
				</div>
				<a class="nav-btn" id="nav-open-btn" href="#nav">Navigation</a>
			</header>
			<nav id="nav" role="navigation">
	            <div class="block">
	                <h2 class="block-title">Navigation</h2>
	                <?php wp_nav_menu( array('menu' => 'Nav' )); ?>
	                <a class="close-btn" id="nav-close-btn" href="#top">Back to Content</a>
	            </div>
	        </nav>
	        <div id="main" role="main" class="main">

