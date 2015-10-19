<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Interference_Archive_Benefit
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function ia_benefit_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'ia_benefit_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function ia_benefit_jetpack_setup
add_action( 'after_setup_theme', 'ia_benefit_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function ia_benefit_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function ia_benefit_infinite_scroll_render
