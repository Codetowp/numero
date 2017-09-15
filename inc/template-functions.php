<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package numero
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function numero_body_classes( $classes ) {

    if (  is_page() ) {
		$classes = array( 'single' );
	}
   
	return $classes;
}
add_filter( 'body_class', 'numero_body_classes' );




/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function numero_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'numero_pingback_header' );
