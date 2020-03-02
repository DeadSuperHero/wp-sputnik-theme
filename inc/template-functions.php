<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Sputnik
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sputnik_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'sputnik_body_classes' );


if (function_exists('get_wp_term_image'))
{
    $meta_image = get_wp_term_image($term_id);
    //It will give category/term image url
}


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sputnik_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'sputnik_pingback_header' );


function register_mobile_menu() {
  register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
}
add_action( 'init', 'register_mobile_menu' );
