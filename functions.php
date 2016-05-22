<?php
/**
 * Owari Snapchat functions
 *
 * @package Owari Snapchat
 */
/**
 * Enqueue styles.
 */
function owari_snapchat_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'owari_snapchat_enqueue_styles' );
