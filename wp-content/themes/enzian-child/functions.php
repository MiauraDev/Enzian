<?php

/**
 * Child Theme Function
 *
 */

add_action( 'after_setup_theme', 'enzian_child_theme_setup' );
add_action( 'wp_enqueue_scripts', 'enzian_child_enqueue_styles', 100);

if( !function_exists('enzian_child_enqueue_styles') ) {
    function enzian_child_enqueue_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style( 'enzian-child-style', get_stylesheet_directory_uri() . '/style.css', null, $version );
    }
}


if( !function_exists('enzian_child_theme_setup') ) {
    function enzian_child_theme_setup() {
        load_child_theme_textdomain( 'enzian-child', get_stylesheet_directory() . '/languages' );
    }
}