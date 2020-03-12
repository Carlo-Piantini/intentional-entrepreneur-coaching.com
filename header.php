<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intentional_Entrepreneur_Coaching
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,700|IBM+Plex+Serif:500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'intentional-entrepreneur-coaching' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="inner">
			<a id="site-link" href="<?php echo bloginfo('url'); ?>"><?php get_template_part('images/svg/inline', 'home.svg'); ?></a><!--#site-link-->
			<a id="mobile-toggle" class="" href="#">
				<div id="mobile-icon">
					<div class="icon-bar"></div><!--.icon-bar-->
					<div class="icon-bar"></div><!--.icon-bar-->
					<div class="icon-bar"></div><!--.icon-bar-->
				</div><!--#mobile-icon-->
			</a><!--#mobile-toggle-->
			<nav id="site-navigation">
				<?php wp_nav_menu(array(
					'theme_location' => 'menu-1',
					'menu_id' => 'site-navigation-menu',
					'container' => false
				)); ?>
			</nav><!--#site-navigation-->
		</div><!--.inner-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
