<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


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
    <script src="https://use.fontawesome.com/df9e5cc025.js"></script>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<div id="container">


	<div id="header-wrap" class="nav-down"><header id="header" class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">


		<div id="inner-header" class="cf">
			<div class="wrap col">

			<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
			<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><img alt="Frugal For Less Logo" src="http://localhost:8888/wp-content/uploads/2019/01/ffl-logo.png"></a></p>
			<div id="hamburger-wrap">
				<span onclick="openNav()">
					<div class="hamburger">&#9776;</div>
				</span>
			</div>

			<?php // if you'd like to use the site description you can un-comment it below ?>
			<?php // bloginfo('description'); ?>


			<nav id="top-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<?php wp_nav_menu(array(
					'container' => false,                           // remove nav container
					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
					'menu_class' => 'nav main-nav cf',               // adding custom nav class
					'theme_location' => 'main-nav',                 // where it's located in the theme
					'before' => '',                                 // before the menu
					'after' => '',                                  // after the menu
					'link_before' => '',                            // before each link
					'link_after' => '',                             // after each link
					'depth' => 0,                                   // limit the depth of the nav
					'fallback_cb' => ''                             // fallback function (if there is one)
				)); ?>

			</nav>
				<div class="search-wrap">
					<div class="search-icon">
						<i class="fa fa-search" aria-hidden="true"></i>
						<i class="fa fa-times hidden" aria-hidden="true"></i>
					</div>
					<div class="popup non-active">
						<form class="contract" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							<div class="input-wrap">
								<input type="text" value="" name="s" id="s" placeholder="Search this site" />
							</div>
						</form>
					</div>
				</div>


		</div>

		</div>


	</header></div>

	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<nav id="side-nav"role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<?php wp_nav_menu(array(
				'container' => false,                           // remove nav container
				'container_class' => 'menu cf',                 // class of container (should you choose to use it)
				'menu' => __( 'Mobile Menu', 'bonestheme' ),  // nav name
				'menu_class' => 'nav cf',               // adding custom nav class
				'theme_location' => 'mobile-menu',                 // where it's located in the theme
				'before' => '',                                 // before the menu
				'after' => '',                                  // after the menu
				'link_before' => '',                            // before each link
				'link_after' => '',                             // after each link
				'depth' => 0,                                   // limit the depth of the nav
				'fallback_cb' => ''                             // fallback function (if there is one)
			)); ?>

		</nav>

	</div>



