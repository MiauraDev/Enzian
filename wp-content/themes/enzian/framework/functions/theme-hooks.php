<?php
/**
 * This file includes helper functions used throughout the theme.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * ACTIONS
 */
add_action( 'wp_body_open',     'enzian_add_pageloader_icon', 1);
//add_action( 'wp_footer', 'enzian_render_inline_icon_to_footer', 1000);

/**
 * FILTERS
 */
add_filter( 'body_class',       'enzian_body_classes' );
add_filter( 'excerpt_length',   'enzian_change_excerpt_length');
