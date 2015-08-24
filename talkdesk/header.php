<?php /**
 * The Header for this theme.
 *
 * Displays all of the <head> section and everything up till <div id="grngrdn-main">
 *
 * @subpackage Green Garden
 * @since Green Garden 1.2
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo ( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body <?php body_class(); ?>>
	<div id="grngrdn-page">
		<div id="grngrdn-site-header" class="shadow-s">

			<!-- My Code -->
			<div id="menu-burguer">
				<span class="lines"></span>
			</div>
			<div class="grngrdn-header-top main">
				<div id="top-menu">
					<nav id="grngrdn-top-nav" class="alignright"><?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'container_class' => 'my_extra_menu_class' ) ); ?></nav><!-- #grngrdn-main-nav -->
				</div>
			</div>
			<!-- End My Code -->

			<div class="grngrdn-header-main align-center main">
				<header id="grngrdn-logo" role="banner"  class="alignleft">
					<h1 class="site-title  wrap"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home" ><?php bloginfo( 'name' ); ?></a></h1>
				</header>
				<nav id="grngrdn-main-nav" class="alignright"><?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?></nav><!-- #grngrdn-main-nav -->
				<div class="clear"></div>
			</div><!-- .grngrdn-header-main -->
			<?php if ( get_header_image() ) : ?>
				<div id="grngrdn-custom-image-image" class="aligncenter">
					<img src="<?php header_image(); ?>" alt="" />
				</div>
			<?php endif; 
			if( is_home() ) :
				get_template_part( 'greengarden', 'slider' );
			endif; ?>
		</div><!-- #grngrdn-site-header -->

		<!-- My Code -->
		<div id="main-title" style="height:600px;">
			<h1>Two-Way Integration With Your Business Tools</h1>
			<h3>Automatically synchronize contacts, cases, tickets and other relevant information from your business tools.</h3>
			<a class="call-to-action" href="#" target="_blank">Ask for a Free Demo</a>
		</div>
		<!-- End My Code -->

		<div class="clear"></div>
		<div id="grngrdn-main" class="aligncenter">