<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="gtwjbJccwfKi_DuRpzzsHG7YmcqPefgHYWl_3MKgF9E" />
	<meta name="p:domain_verify" content="4daa26036997e9edbe08b8bac2d1e24e"/>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if (!(is_front_page() || is_page_template('page-templates/project-planner.php'))){ ?>
<!--
<div class="page-loader">
  <div class="loader">
	<ul class="be-loader">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
  </div>
</div>
-->
<?php } ?>

<div id="page">

	<header id="masthead" class="site-header" role="banner">
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger gn-open-all">
				<a class="gn-icon gn-icon-menu"><span>Menu</span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ashley-Cameron-Graphic-Design-logo.png" alt="Ashley Cameron Design logo">
				</a>
				<nav id="primary-navigation" class="gn-menu-wrapper" role="navigation">
					<div class="gn-scroller">
						<h2 class="menu-toggle">Primary Menu</h2>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'gn-menu' ) ); ?>
					</div>
				</nav>
			</li>
		</ul>
		<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
	</header><!-- #masthead -->

	<script>
		new gnMenu( document.getElementById( 'gn-menu' ) );
	</script>

	<div id="main" class="site-main">