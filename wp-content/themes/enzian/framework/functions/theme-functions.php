<?php
/**
 * This file includes helper functions used throughout the theme.
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if(!function_exists('enzian_add_meta_into_head_tag')){
    function enzian_add_meta_into_head_tag(){
        do_action('enzian/action/head');
    }
}

/**
 * Add classes to the body tag
 *
 * @since 1.0.0
 */
if (!function_exists('enzian_body_classes')) {
    function enzian_body_classes($classes) {
        $classes[] = is_rtl() ? 'rtl' : 'ltr';
        $classes[] = 'enzian-body';
        $classes[] = 'lastudio-enzian';

        $sidebar = apply_filters('enzian/filter/sidebar_primary_name', 'sidebar');

        if(!is_active_sidebar($sidebar) || is_page_template(['templates/no-sidebar.php', 'templates/fullwidth.php'])){
            $classes[] = 'site-no-sidebar';
        }
        elseif ( is_active_sidebar($sidebar) ){
	        $classes[] = 'site-has-sidebar';
        }

        if (is_singular('page')) {
            global $post;
            if (strpos($post->post_content, 'la_wishlist') !== false) {
                $classes[] = 'woocommerce-page';
                $classes[] = 'woocommerce-page-wishlist';
            }
            if (strpos($post->post_content, 'la_compare') !== false) {
                $classes[] = 'woocommerce-page';
                $classes[] = 'woocommerce-compare';
            }
        }

        $classes[] = 'body-loading';
	    if( enzian_string_to_bool( enzian_get_theme_mod('page_preloader') ) ){
            $classes[] = 'site-loading';
            $classes[] = 'active_page_loading';
        }
	    if(!function_exists('lastudio_kit')){
	    	$classes[] = 'wp-default-theme';
	    }

        // Return classes
        return $classes;
    }
}

/**
 * Add page loader icon
 *
 * @since 1.0.0
 */
if(!function_exists('enzian_add_pageloader_icon')){
    function enzian_add_pageloader_icon(){
        if( enzian_string_to_bool( enzian_get_theme_mod('page_preloader') ) ){
            $loading_style = enzian_get_theme_mod('page_preloader_type', 1);
            if($loading_style == 'custom'){
                if(($img = enzian_get_theme_mod('page_preloader_custom')) && !empty($img) ){
                    add_filter('enzian/filter/enable_image_lazyload', '__return_false', 10000);
                    add_filter('wp_lazy_loading_enabled', '__return_false', 10000);
                    echo '<div class="la-image-loading spinner-custom"><div class="content"><div class="la-loader"><img data-no-lazy="true" src="'.esc_url($img).'" width="50" height="50" alt="'.esc_attr(get_bloginfo('display')).'"/></div><div class="la-loader-ss"></div></div></div>';
                    enzian_deactive_filter('enzian/filter/enable_image_lazyload', '__return_false', 10000);
                    enzian_deactive_filter('wp_lazy_loading_enabled', '__return_false', 10000);
                }
                else{
                    echo '<div class="la-image-loading"><div class="content"><div class="la-loader spinner1"></div><div class="la-loader-ss"></div></div></div>';
                }
            }
            else{
                echo '<div class="la-image-loading"><div class="content"><div class="la-loader spinner'.esc_attr($loading_style).'"><div class="dot1"></div><div class="dot2"></div><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div><div class="cube1"></div><div class="cube2"></div><div class="cube3"></div><div class="cube4"></div></div><div class="la-loader-ss"></div></div></div>';
            }
        }
    }
}

/**
 * helper to change the excerpt length
 */
if(!function_exists('enzian_change_excerpt_length')){
    function enzian_change_excerpt_length( $length ){
        $excerpt_length = 32;
        if($excerpt_length > 0){
            return $excerpt_length;
        }
        return $length;
    }
}

/**
 * Helper to render inline svg
 */

if(!function_exists('enzian_render_inline_icon_to_footer')){
    function enzian_render_inline_icon_to_footer(){
        get_template_part('partials/icons');
    }
}