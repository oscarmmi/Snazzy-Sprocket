<?php
/**
 * Functions and definitions
 */

function snazzy_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'snazzy-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'snazzy_theme_setup' );

function snazzy_theme_enqueue_styles() {
    // Enqueue the main style.css
    wp_enqueue_style( 'snazzy-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Enqueue the Tailwind compiled CSS
    wp_enqueue_style( 'snazzy-tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), filemtime( get_template_directory() . '/assets/css/tailwind.css' ) );
}
add_action( 'wp_enqueue_scripts', 'snazzy_theme_enqueue_styles' );

// Add classes to menu li elements
function snazzy_theme_nav_menu_css_class( $classes, $item, $args ) {
    if ( isset($args->theme_location) && $args->theme_location == 'primary' ) {
        $classes[] = 'flex items-center';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'snazzy_theme_nav_menu_css_class', 10, 3 );

// Add classes to menu a elements
function snazzy_theme_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( isset($args->theme_location) && $args->theme_location == 'primary' ) {
        // Base classes
        $class = "font-['DM_Sans'] font-medium text-[14px] leading-[23.1px] tracking-[0.28px] transition-colors ";
        
        // Active state (current page) vs Inactive state
        if ( in_array( 'current-menu-item', $item->classes ) || in_array( 'current-page-ancestor', $item->classes ) ) {
            $class .= 'text-[#00D4AA]';
        } else {
            $class .= 'text-[#9BA3C2] hover:text-[#00D4AA]';
        }

        $atts['class'] = $class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'snazzy_theme_nav_menu_link_attributes', 10, 3 );
