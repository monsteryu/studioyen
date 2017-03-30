<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div class="cssload-loader">
			<div class="cssload-flipper">
				<div class="cssload-front"></div>
				<div class="cssload-back"></div>
			</div>
		</div>
		<div id="container" class="about">
			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div class="navbar white">
					<div class="js-menu navbar__btn navbar__btn__menu">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/btn_menu_black.svg">
						<span class="black">menu</span>
					</div>
					<?php sub_menu('sub-menu');?>
					<div class="js-products navbar__btn navbar__btn__products"><img src="<?php echo get_template_directory_uri(); ?>/library/images/btn_products_black.svg">
						<span class="black">products</span>
					</div>
					<a class="navbar__logo" href="<?php echo site_url();?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/library/images/logo_studioyen_black.png"></a>
				</div>
				
				<?php right_custom_menu('main-nav');?>
				<?php left_custom_menu('left-menu');?>
				<div class="nav-bg js-right-bg"></div>
				<div class="nav-bg js-left-bg"></div>
			</header>

