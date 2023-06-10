<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package starter
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function starter_body_classes( $classes ) {
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
add_filter( 'body_class', 'starter_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function starter_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'starter_pingback_header' );

/**
 * Print Favicons Directories
 */
function get_favicons()
{
	echo "<link rel='apple-touch-icon' sizes='76x76' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/apple-touch-icon.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='32x32' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/favicon-32x32.png' />" . "\n";
	echo "<link rel='icon' type='image/png' sizes='16x16' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/favicon-16x16.png' />" . "\n";
	echo "<link rel='manifest' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/site.webmanifest' />" . "\n";
	echo "<link rel='mask-icon' color='#5bbad5' href='" . get_stylesheet_directory_uri() . "/assets/src/favicon/safari-pinned-tab.svg' />" . "\n";
	echo "<meta name='msapplication-TileColor' content='#da532c' />" . "\n";
	echo "<meta name='theme-color' content='#ffffff' />" . "\n";
}

add_action('wp_head', 'get_favicons');
