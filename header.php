<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sputnik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sputnik' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
				if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	<div id="search_box">
		<?php get_search_form(); ?>
	</div>
	
	<!-- #mobile-menu -->
	<input type="checkbox" class="mobile-nav-check" id="mobile-nav-check" />
	<nav id="mobile-nav" class="navigation">
		<div id="mobile_search_box">
			<?php get_search_form(); ?>
		</div>
		<div class="mobile-list">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
		</div>
	</nav>

	<label for ="mobile-nav-check" class="toggle-menu">
		☰
	</label>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
