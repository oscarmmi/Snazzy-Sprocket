<?php
/**
 * Functions and definitions
 */

function snazzy_theme_enqueue_styles() {
    // Enqueue the main style.css
    wp_enqueue_style( 'snazzy-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Enqueue the Tailwind compiled CSS
    wp_enqueue_style( 'snazzy-tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), filemtime( get_template_directory() . '/assets/css/tailwind.css' ) );
}
add_action( 'wp_enqueue_scripts', 'snazzy_theme_enqueue_styles' );
