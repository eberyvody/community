<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>


	</head>

	<body <?php body_class(); ?>>

		<header role="banner">

			<div id="inner-header" class="clearfix">

				<div class="navbar">
					<div class="navbar-inner">
						<div class="container-fluid nav-container">

						<div class="mobile-nav">
							<button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
							<a class="brand text-center" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
								<?php if(true) { ?>
									<img src="https://d12azzhof0chfb.cloudfront.net/assets/logo-972893305ae2e185a6b7ec4f66344121.svg" height="45" width="111" alt="<?php echo get_bloginfo('description'); ?>">
									<?php }
									if(false) bloginfo('name'); ?>
							</a>
							<div class="nav-collapse collapse" style="height: 0px;">
		            <ul class="nav">
		              <li>
		                <a href="https://yerdle.com/about">About</a>
		              </li>
		              <li>
		                <a href="https://yerdle.com/faq">FAQ</a>
		              </li>
		              <li>
		                <a href="http://community.yerdle.com/">Community</a>
		              </li>
		            </ul>
		          </div>
	          </div>

						<div class="desktop-nav">
							<nav role="navigation">
								<div class="nav-collapse">
									<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								</div>
								<ul class="social-nav pull-right">
									<li>
										<a href="https://twitter.com/yerdle"><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href="https://facebook.com/yerdle"><i class="fa fa-facebook-square"></i></a>
									</li>
									<li>
										<a href="https://instagram.com/yerdle"><i class="fa fa-instagram"></i></a>
									</li>
								</ul>

								<a class="brand text-center" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
									<?php if(true) { ?>
										<img src="https://d12azzhof0chfb.cloudfront.net/assets/logo-972893305ae2e185a6b7ec4f66344121.svg" height="45" width="111" alt="<?php echo get_bloginfo('description'); ?>">
										<?php }
										if(false) bloginfo('name'); ?>
								</a>

								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
								</a>

							</nav>
						</div>

							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</form>
							<?php } ?>

						</div> <!-- end .nav-container -->
					</div> <!-- end .navbar-inner -->
				</div> <!-- end .navbar -->

			</div> <!-- end #inner-header -->

		</header> <!-- end header -->

		<div class="container-fluid">

			<div class="clearfix row-fluid">
<!-- 
				<header>
					<a href="/">
						<img class="non-mobile" src="http://i.imgur.com/UiLRSl0.png" />
						<img class="mobile" src="http://community.yerdle.com/wp-content/uploads/2013/09/community-banner-mobile.png"/ >
					</a>
				</header> -->

			</div>