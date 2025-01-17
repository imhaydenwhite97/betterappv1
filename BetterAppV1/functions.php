<?php
/**
 * Theme Functions
 */

function theme_enqueue_navigation() {
    // Navigation Styles
    wp_enqueue_style(
        'navigation-desktop',
        get_template_directory_uri() . '/assets/css/navigation/desktop.css',
        array(),
        '1.0.0'
    );
    
    wp_enqueue_style(
        'navigation-mobile',
        get_template_directory_uri() . '/assets/css/navigation/mobile.css',
        array(),
        '1.0.0'
    );

    // Navigation Scripts
    wp_enqueue_script(
        'navigation-desktop',
        get_template_directory_uri() . '/assets/js/navigation/desktop.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    wp_enqueue_script(
        'navigation-mobile',
        get_template_directory_uri() . '/assets/js/navigation/mobile.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_navigation');

// Register Navigation Menus
function register_theme_menus() {
    register_nav_menus(array(
        'desktop-menu' => 'Desktop Navigation',
        'mobile-menu'  => 'Mobile Navigation',
        'mega-menu'    => 'Desktop Mega Menu'
    ));
}
add_action('init', 'register_theme_menus');

// Remove admin toolbar for all users
add_filter('show_admin_bar', '__return_false');

// Include Mega Menu Walker
require_once get_template_directory() . '/inc/classes/mega-menu-walker.php';
