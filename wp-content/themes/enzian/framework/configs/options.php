<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if(!function_exists('enzian_setup_customizer')){
    function enzian_setup_customizer( $args ){

        $args['prefix']      = 'enzian';
        $args['options']    = [
            /** `General` panel */
            'general_settings' => array(
                'title'       => esc_html__( 'General Site settings', 'enzian' ),
                'priority'    => 40,
                'type'        => 'panel',
            ),
            /** `Favicon` section */
            'favicon' => array(
                'title'       => esc_html__( 'Favicon', 'enzian' ),
                'priority'    => 10,
                'panel'       => 'general_settings',
                'type'        => 'section',
            ),
            /** `Logo` section */
            'logos' => array(
                'title'       => esc_html__( 'Logo', 'enzian' ),
                'priority'    => 15,
                'panel'       => 'general_settings',
                'type'        => 'section',
            ),
            'logo_default' => array(
                'title'    => esc_html__( 'Logo', 'enzian' ),
                'section'  => 'logos',
                'priority' => 20,
                'field'     => 'image',
                'type'     => 'control',
                'button_labels' => array(
                    'select' => esc_html__( 'Select Logo', 'enzian' ),
                    'remove' => esc_html__( 'Remove Logo', 'enzian' ),
                    'change' => esc_html__( 'Change Logo', 'enzian' ),
                ),
            ),
            'logo_transparency' => array(
                'title'    => esc_html__( 'Logo Transparency', 'enzian' ),
                'section'  => 'logos',
                'priority' => 25,
                'field'     => 'file',
                'type'     => 'control',
                'button_labels' => array(
                    'select' => esc_html__( 'Select Logo', 'enzian' ),
                    'remove' => esc_html__( 'Remove Logo', 'enzian' ),
                    'change' => esc_html__( 'Change Logo', 'enzian' ),
                ),
            ),
            /** `Preloader` panel */
            'preloader' => array(
                'title'       => esc_html__( 'Page preloader', 'enzian' ),
                'priority'    => 15,
                'panel'       => 'general_settings',
                'type'        => 'section',
            ),
            'page_preloader' => array(
                'title'    => esc_html__( 'Show page preloader', 'enzian' ),
                'section'  => 'preloader',
                'priority' => 10,
                'default'  => false,
                'field'     => 'checkbox',
                'type'     => 'control',
            ),
            'page_preloader_type' => array(
                'title'    => esc_html__( 'Page preloader type', 'enzian' ),
                'section'  => 'preloader',
                'priority' => 15,
                'field'     => 'select',
                'default'  => '1',
                'type'     => 'control',
                'choices'  => [
                    '1' => esc_html__( 'Type 1', 'enzian' ),
                    '2' => esc_html__( 'Type 2', 'enzian' ),
                    '3' => esc_html__( 'Type 3', 'enzian' ),
                    '4' => esc_html__( 'Type 4', 'enzian' ),
                    '5' => esc_html__( 'Type 5', 'enzian' ),
                    'custom' => esc_html__( 'Custom', 'enzian' ),
                ],
            ),
            'page_preloader_custom' => array(
                'title'    => esc_html__( 'Custom page preloader image', 'enzian' ),
                'section'  => 'preloader',
                'priority' => 20,
                'field'     => 'image',
                'type'     => 'control',
            ),
            'page_preloader_bgcolor' => array(
	            'title'   => esc_html__( 'Preloader background color', 'enzian' ),
	            'section' => 'colors',
	            'field'   => 'hex_color',
	            'type'    => 'control',
	            'priority' => 20,
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => '.la-image-loading',
			            'property' => 'background-color'
		            ]
	            ]
            ),
            'page_preloader_textcolor' => array(
	            'title'   => esc_html__( 'Preloader text color', 'enzian' ),
	            'section' => 'colors',
	            'field'   => 'hex_color',
	            'type'    => 'control',
	            'priority' => 20,
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => '.la-image-loading',
			            'property' => 'color'
		            ]
	            ]
            ),
            /** `Color Schema` panel */
            'body_bgcolor' => array(
	            'title'   => esc_html__( 'Body Background Color', 'enzian' ),
	            'section' => 'colors',
	            'field'   => 'hex_color',
	            'type'    => 'control',
	            'priority' => 20,
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-body-bg-color'
		            ]
	            ]
            ),
            'text_color' => array(
	            'title'   => esc_html__( 'Text color', 'enzian' ),
	            'section' => 'colors',
	            'field'   => 'hex_color',
	            'type'    => 'control',
	            'priority' => 20,
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-body-font-color'
		            ]
	            ]
            ),
            'primary_color' => array(
                'title'   => esc_html__( 'Primary color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 25,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-primary-color'
	                ]
                ]
            ),
            'secondary_color' => array(
                'title'   => esc_html__( 'Secondary color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 30,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-secondary-color'
	                ]
                ]
            ),
            'third_color' => array(
	            'title'   => esc_html__( 'Third color', 'enzian' ),
	            'section' => 'colors',
	            'field'   => 'hex_color',
	            'type'    => 'control',
	            'priority' => 35,
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-three-color'
		            ]
	            ]
            ),
            'border_color' => array(
	            'title'   => esc_html__( 'Border color', 'enzian' ),
	            'section' => 'colors',
	            'field'   => 'hex_color',
	            'type'    => 'control',
	            'priority' => 38,
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-border-color'
		            ]
	            ]
            ),
            'link_color' => array(
                'title'   => esc_html__( 'Link color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 40,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-link-color'
	                ]
                ]
            ),
            'link_hover_color' => array(
                'title'   => esc_html__( 'Link hover color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 45,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-link-hover-color'
	                ]
                ]
            ),
            'h_color' => array(
                'title'   => esc_html__( 'Heading color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 48,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-heading-font-color'
	                ],
	                [
		                'selector' => 'h1, h2, h3, h4, h5, h6, .theme-heading',
		                'property' => 'color'
	                ]
                ]
            ),
            'h1_color' => array(
                'title'   => esc_html__( 'H1 color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 50,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => '.h1, h1',
		                'property' => 'color'
	                ]
                ]
            ),
            'h2_color' => array(
                'title'   => esc_html__( 'H2 color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 55,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => '.h2, h2',
		                'property' => 'color'
	                ]
                ]
            ),
            'h3_color' => array(
                'title'   => esc_html__( 'H3 color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 60,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => '.h3, h3',
		                'property' => 'color'
	                ]
                ]
            ),
            'h4_color' => array(
                'title'   => esc_html__( 'H4 color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 65,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => '.h4, h4',
		                'property' => 'color'
	                ]
                ]
            ),
            'h5_color' => array(
                'title'   => esc_html__( 'H5 color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 70,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => '.h5, h5',
		                'property' => 'color'
	                ]
                ]
            ),
            'h6_color' => array(
                'title'   => esc_html__( 'H6 color', 'enzian' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 75,
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => '.h6 h6',
		                'property' => 'color'
	                ]
                ]
            ),
            /** `Typography Settings` panel */
            'typography' => array(
                'title'       => esc_html__( 'Typography', 'enzian' ),
                'description' => esc_html__( 'Configure typography settings', 'enzian' ),
                'priority'    => 45,
                'type'        => 'panel',
            ),
            /** `Body text` section */
            'body_typography' => array(
                'title'       => esc_html__( 'Body text', 'enzian' ),
                'priority'    => 5,
                'panel'       => 'typography',
                'type'        => 'section',
            ),
            'body_font_family' => array(
                'title'   => esc_html__( 'Font Family', 'enzian' ),
                'section' => 'body_typography',
                'field'   => 'fonts',
                'type'    => 'control',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-body-font-family'
	                ]
                ]
            ),
            'body_font_style' => array(
                'title'   => esc_html__( 'Font Style', 'enzian' ),
                'section' => 'body_typography',
                'field'   => 'select',
                'choices' => enzian_customizer_get_font_styles(),
                'type'    => 'control',
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-body-font-style'
	                ]
                ]
            ),
            'body_font_weight' => array(
                'title'   => esc_html__( 'Font Weight', 'enzian' ),
                'section' => 'body_typography',
                'field'   => 'select',
                'choices' => enzian_customizer_get_font_weight(),
                'type'    => 'control',
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-body-font-weight'
	                ]
                ]
            ),
            'body_font_size' => array(
                'title'       => esc_html__( 'Font Size, px', 'enzian' ),
                'section'     => 'body_typography',
                'field'       => 'number',
                'unit'       => 'px',
                'input_attrs' => array(
                    'min'  => 6,
                    'max'  => 50,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-body-font-size'
	                ]
                ]
            ),
            'body_line_height' => array(
                'title'       => esc_html__( 'Line Height', 'enzian' ),
                'description' => esc_html__( 'Relative to the font-size of the element', 'enzian' ),
                'section'     => 'body_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => 1.0,
                    'max'  => 3.0,
                    'step' => 0.1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-body-font-height'
	                ]
                ]
            ),
            'body_letter_spacing' => array(
                'title'       => esc_html__( 'Letter Spacing, px', 'enzian' ),
                'section'     => 'body_typography',
                'field'       => 'number',
                'unit'       => 'px',
                'input_attrs' => array(
                    'min'  => -10,
                    'max'  => 10,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-body-font-spacing'
	                ]
                ]
            ),
            'body_character_set' => array(
                'title'   => esc_html__( 'Character Set', 'enzian' ),
                'section' => 'body_typography',
                'default' => 'latin',
                'field'   => 'select',
                'choices' => enzian_customizer_get_character_sets(),
                'type'    => 'control',
            ),
            'body_text_align' => array(
                'title'   => esc_html__( 'Text Align', 'enzian' ),
                'section' => 'body_typography',
                'field'   => 'select',
                'choices' => enzian_customizer_get_text_aligns(),
                'type'    => 'control',
                'transport'=> 'postMessage',
                'css' => [
	                [
		                'selector' => ':root',
		                'property' => '--theme-body-font-align'
	                ]
                ]
            ),

            /** `Heading` section */
            'heading_typography' => array(
	            'title'       => esc_html__( 'Heading Typography', 'enzian' ),
	            'priority'    => 10,
	            'panel'       => 'typography',
	            'type'        => 'section',
            ),
            'heading_font_family' => array(
	            'title'   => esc_html__( 'Font Family', 'enzian' ),
	            'section' => 'heading_typography',
	            'field'   => 'fonts',
	            'type'    => 'control',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-heading-font-family'
		            ]
	            ]
            ),
            'heading_font_style' => array(
	            'title'   => esc_html__( 'Font Style', 'enzian' ),
	            'section' => 'heading_typography',
	            'field'   => 'select',
	            'choices' => enzian_customizer_get_font_styles(),
	            'type'    => 'control',
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-heading-font-style'
		            ]
	            ]
            ),
            'heading_font_weight' => array(
	            'title'   => esc_html__( 'Font Weight', 'enzian' ),
	            'section' => 'heading_typography',
	            'field'   => 'select',
	            'choices' => enzian_customizer_get_font_weight(),
	            'type'    => 'control',
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-heading-font-weight'
		            ]
	            ]
            ),
            'heading_line_height' => array(
	            'title'       => esc_html__( 'Line Height', 'enzian' ),
	            'description' => esc_html__( 'Relative to the font-size of the element', 'enzian' ),
	            'section'     => 'heading_typography',
	            'field'       => 'number',
	            'input_attrs' => array(
		            'min'  => 1.0,
		            'max'  => 3.0,
		            'step' => 0.1,
	            ),
	            'type' => 'control',
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-heading-font-line-height'
		            ]
	            ]
            ),
            'heading_letter_spacing' => array(
	            'title'       => esc_html__( 'Letter Spacing, px', 'enzian' ),
	            'section'     => 'heading_typography',
	            'field'       => 'number',
                'unit'       => 'px',
	            'input_attrs' => array(
		            'min'  => -10,
		            'max'  => 10,
		            'step' => 1,
	            ),
	            'type' => 'control',
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-heading-font-spacing'
		            ]
	            ]
            ),
            'heading_character_set' => array(
	            'title'   => esc_html__( 'Character Set', 'enzian' ),
	            'section' => 'heading_typography',
	            'default' => 'latin',
	            'field'   => 'select',
	            'choices' => enzian_customizer_get_character_sets(),
	            'type'    => 'control',
            ),
            'heading_text_align' => array(
	            'title'   => esc_html__( 'Text Align', 'enzian' ),
	            'section' => 'heading_typography',
	            'field'   => 'select',
	            'choices' => enzian_customizer_get_text_aligns(),
	            'type'    => 'control',
	            'transport'=> 'postMessage',
	            'css' => [
		            [
			            'selector' => ':root',
			            'property' => '--theme-heading-font-align'
		            ]
	            ]
            ),
        ];

	    if(function_exists('WC')){

		    $woo_default_attr = Enzian_WooCommerce_Compare::get_default_attributes();
		    $woo_tax_attr = Enzian_WooCommerce_Compare::get_taxonomies();
		    $woo_all_attr = array_merge($woo_default_attr, $woo_tax_attr);

	    	$woo_opts = [
			    /** WooCommerce */
			    'shop_settings' => array(
				    'title'       => esc_html__( 'Shop settings', 'enzian' ),
				    'priority'    => 70,
				    'panel'       => 'general_settings',
				    'type'        => 'section',
			    ),
			    'shopdetail_settings' => array(
				    'title'       => esc_html__( 'Product settings', 'enzian' ),
				    'priority'    => 75,
				    'panel'       => 'general_settings',
				    'type'        => 'section',
			    ),
			    'compare_wishlist' => array(
				    'title'       => esc_html__( 'Compare & Wishlist', 'enzian' ),
				    'priority'    => 80,
				    'panel'       => 'general_settings',
				    'type'        => 'section',
			    ),
			    'shop_cart' => array(
				    'title'       => esc_html__( 'Cart', 'enzian' ),
				    'priority'    => 85,
				    'panel'       => 'general_settings',
				    'type'        => 'section',
			    ),
			    'freeshipping_thresholds' => array(
				    'title'         => esc_html__( 'WooCommerce Enable Free Shipping Thresholds', 'enzian' ),
				    'description'   => esc_html__( 'Enable Free shipping amount notice', 'enzian' ),
				    'section'       => 'shop_cart',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'thresholds_text1' => array(
				    'title'         => esc_html__( 'Shipping bar text 1', 'enzian' ),
				    'section'       => 'shop_cart',
				    'default'       => esc_html__('[icon]Spend [amount] to get Free Shipping', 'enzian'),
				    'description'       => esc_html__('[icon]Spend [amount] to get Free Shipping', 'enzian'),
				    'field'          => 'text',
				    'type'          => 'control',
			    ),
			    'thresholds_text2' => array(
				    'title'         => esc_html__( 'Shipping bar text 2', 'enzian' ),
				    'section'       => 'shop_cart',
				    'default'       => esc_html__('[icon]Congratulations! You\'ve got free shipping!', 'enzian'),
				    'description'       => esc_html__('[icon]Congratulations! You\'ve got free shipping!', 'enzian'),
				    'field'          => 'text',
				    'type'          => 'control',
			    ),
			    'woocommerce_gallery_zoom' => array(
				    'title'         => esc_html__( 'Enable WooCommerce Zoom', 'enzian' ),
				    'section'       => 'shopdetail_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'woocommerce_gallery_lightbox' => array(
				    'title'         => esc_html__( 'Enable WooCommerce LightBox', 'enzian' ),
				    'section'       => 'shopdetail_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'single_ajax_add_cart' => array(
				    'title'         => esc_html__( 'Ajax Add to Cart', 'enzian' ),
				    'description'   => esc_html__( 'Support Ajax Add to cart for all types of products', 'enzian' ),
				    'section'       => 'shopdetail_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'wc_per_page_default' => array(
				    'title'         => esc_html__( 'Per Page Default', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => '',
				    'description'   => esc_html__('Enter total products display per page', 'enzian'),
				    'field'          => 'text',
				    'type'          => 'control',
			    ),
			    'wc_per_page_allow' => array(
				    'title'         => esc_html__( 'Per Page Allow', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => '',
				    'description'       => esc_html__('Comma-separated. ( i.e: 3,6,9)', 'enzian'),
				    'field'          => 'text',
				    'type'          => 'control',
			    ),
			    'wc_per_row_allow' => array(
				    'title'         => esc_html__( 'Per Row Allow', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => '',
				    'description'       => esc_html__('Comma-separated. ( i.e: 2,3,4)', 'enzian'),
				    'field'          => 'text',
				    'type'          => 'control',
			    ),
			    'catalog_mode' => array(
				    'title'         => esc_html__( 'Catalog Mode', 'enzian' ),
				    'description'   => esc_html__( 'Turn on to disable the shopping functionality of WooCommerce.', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'catalog_mode_price' => array(
				    'title'         => esc_html__( 'Catalog Mode Price', 'enzian' ),
				    'description'   => esc_html__( 'Turn on to do not show product price', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'woocommerce_enable_crossfade_effect' => array(
				    'title'         => esc_html__( 'Enable Crossfade Image Effect', 'enzian' ),
				    'description'   => esc_html__( 'Turn on to display the product crossfade image effect on the product.', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'woocommerce_show_rating_on_catalog' => array(
				    'title'         => esc_html__( 'Show Ratings', 'enzian' ),
				    'description'   => esc_html__( 'Turn on to display the ratings on the main shop page and archive shop pages.', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'woocommerce_show_addcart_btn' => array(
				    'title'         => esc_html__( 'Show Add Cart Button', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'woocommerce_show_quickview_btn' => array(
				    'title'         => esc_html__( 'Show Quick View Button', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'woocommerce_show_wishlist_btn' => array(
				    'title'         => esc_html__( 'Show Wishlist Button', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'woocommerce_show_compare_btn' => array(
				    'title'         => esc_html__( 'Show Compare Button', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),
			    'woocommerce_show_action_btn_mobile' => array(
				    'title'         => esc_html__( 'Force display Product Actions on mobile', 'enzian' ),
				    'description'   => esc_html__( 'Display add-to-cart, wishlist, compare buttons on the mobile', 'enzian' ),
				    'section'       => 'shop_settings',
				    'default'       => false,
				    'field'          => 'checkbox',
				    'type'          => 'control',
			    ),

			    /* Wishlist Compare */
			    'wishlist_page' => array(
				    'title'   => esc_html__( 'Wishlist Page', 'enzian' ),
				    'description'   => esc_html__( 'The content of page must be contain [la_wishlist] shortcode', 'enzian' ),
				    'section' => 'compare_wishlist',
				    'field'   => 'dropdown-pages',
				    'type'    => 'control',
			    ),
			    'compare_page' => array(
				    'title'   => esc_html__( 'Compare Page', 'enzian' ),
				    'description'   => esc_html__( 'The content of page must be contain [la_compare] shortcode', 'enzian' ),
				    'section' => 'compare_wishlist',
				    'field'   => 'dropdown-pages',
				    'type'    => 'control',
			    ),
			    'compare_attribute' => array(
				    'title'   => esc_html__( 'Compare fields to show', 'enzian' ),
				    'description'   => esc_html__( 'Select the fields to show in the comparison table', 'enzian' ),
				    'section' => 'compare_wishlist',
				    'field'   => 'checkbox-multiple',
				    'choices' => $woo_all_attr,
				    'type'    => 'control',
			    ),
		    ];
		    $args['options'] = array_merge($args['options'], $woo_opts);
	    }

	    $args['options'] = array_merge($args['options'], enzian_customizer_heading_typo());

        return $args;
    }
}

add_filter('lastudio-kit/theme/customizer/options', 'enzian_setup_customizer');

if(!function_exists('enzian_customizer_heading_typo')){
	function enzian_customizer_heading_typo(){
		$options = [];
		for ($i = 1; $i <=6; $i++){
			$options['h'.$i.'_typography'] = [
				'title'       => sprintf(__('H%s Heading', 'enzian'), $i),
				'priority'    => 10 + ( $i * 5 ),
				'panel'       => 'typography',
				'type'        => 'section',
			];
			$options['h'.$i.'_font_family'] = [
				'title'   => esc_html__( 'Font Family', 'enzian' ),
				'section' => 'h'.$i.'_typography',
				'field'   => 'fonts',
				'type'    => 'control',
				'css' => [
					[
						'selector' => ':root',
						'property' => '--theme-h'.$i.'-font-family'
					]
				]
			];
			$options['h'.$i.'_font_style'] = [
				'title'   => esc_html__( 'Font Style', 'enzian' ),
				'section' => 'h'.$i.'_typography',
				'field'   => 'select',
				'choices' => enzian_customizer_get_font_styles(),
				'type'    => 'control',
				'transport'=> 'postMessage',
				'css' => [
					[
						'selector' => ':root',
						'property' => '--theme-h'.$i.'-font-style'
					]
				]
			];
			$options['h'.$i.'_font_weight'] = [
				'title'   => esc_html__( 'Font Weight', 'enzian' ),
				'section' => 'h'.$i.'_typography',
				'field'   => 'select',
				'choices' => enzian_customizer_get_font_weight(),
				'type'    => 'control',
				'transport'=> 'postMessage',
				'css' => [
					[
						'selector' => ':root',
						'property' => '--theme-h'.$i.'-font-weight'
					]
				]
			];
			$options['h'.$i.'_font_size'] = [
				'title'       => esc_html__( 'Font Size, px', 'enzian' ),
				'section' => 'h'.$i.'_typography',
				'field'        => 'lakit_responsive',
				'unit'        => 'px',
				'responsive'  => true,
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
				'transport'=> 'postMessage',
				'css' => [
					[
						'selector' => ':root',
						'property' => '--theme-h'.$i.'-font-size'
					]
				]
			];
			$options['h'.$i.'_line_height'] = [
				'title'       => esc_html__( 'Line Height', 'enzian' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'enzian' ),
				'section' => 'h'.$i.'_typography',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
				'transport'=> 'postMessage',
				'css' => [
					[
						'selector' => ':root',
						'property' => '--theme-h'.$i.'-font-line-height'
					]
				]
			];
			$options['h'.$i.'_letter_spacing'] = [
				'title'       => esc_html__( 'Letter Spacing, px', 'enzian' ),
				'section' => 'h'.$i.'_typography',
				'field'        => 'lakit_responsive',
				'unit'        => 'px',
				'responsive'  => true,
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
				'transport'=> 'postMessage',
				'css' => [
					[
						'selector' => ':root',
						'property' => '--theme-h'.$i.'-font-spacing'
					]
				]
			];
			$options['h'.$i.'_character_set'] = [
				'title'   => esc_html__( 'Character Set', 'enzian' ),
				'section' => 'h'.$i.'_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => enzian_customizer_get_character_sets(),
				'type'    => 'control',
			];
			$options['h'.$i.'_text_align'] = [
				'title'   => esc_html__( 'Text Align', 'enzian' ),
				'section' => 'h'.$i.'_typography',
				'field'   => 'select',
				'choices' => enzian_customizer_get_text_aligns(),
				'type'    => 'control',
				'transport'=> 'postMessage',
				'css' => [
					[
						'selector' => ':root',
						'property' => '--theme-h'.$i.'-font-align'
					]
				]
			];
		}
		return $options;
	}
}

/**
 * Move native `site_icon` control (based on WordPress core) into custom section.
 *
 * @since 1.0.0
 * @param  object $wp_customize
 * @return void
 */
if(!function_exists('enzian_customizer_change_core_controls')){
    function enzian_customizer_change_core_controls( $wp_customize ) {
        $wp_customize->remove_control('display_header_text');
        $wp_customize->remove_control('header_textcolor');
	    $wp_customize->remove_control( 'background_color' );
        $wp_customize->get_control( 'site_icon' )->section      = 'enzian_favicon';
        $wp_customize->get_section( 'colors' )->title = esc_html__( 'Color Scheme', 'enzian' );
    }
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'enzian_customizer_change_core_controls', 20 );


/**
 * Get font styles
 *
 * @since 1.0.0
 * @return array
 */
if(!function_exists('enzian_customizer_get_font_styles')){
    function enzian_customizer_get_font_styles() {
        return apply_filters( 'enzian-theme/font/styles', array(
            'normal'  => esc_html__( 'Normal', 'enzian' ),
            'italic'  => esc_html__( 'Italic', 'enzian' ),
            'oblique' => esc_html__( 'Oblique', 'enzian' ),
            'inherit' => esc_html__( 'Inherit', 'enzian' ),
        ) );
    }    
}


/**
 * Get character sets
 *
 * @since 1.0.0
 * @return array
 */
if(!function_exists('enzian_customizer_get_character_sets')){
    function enzian_customizer_get_character_sets() {
        return apply_filters( 'enzian-theme/font/character_sets', array(
            'latin'        => esc_html__( 'Latin', 'enzian' ),
            'greek'        => esc_html__( 'Greek', 'enzian' ),
            'greek-ext'    => esc_html__( 'Greek Extended', 'enzian' ),
            'vietnamese'   => esc_html__( 'Vietnamese', 'enzian' ),
            'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'enzian' ),
            'latin-ext'    => esc_html__( 'Latin Extended', 'enzian' ),
            'cyrillic'     => esc_html__( 'Cyrillic', 'enzian' ),
        ) );
    }
}

/**
 * Get text aligns
 *
 * @since 1.0.0
 * @return array
 */
if(!function_exists('enzian_customizer_get_text_aligns')){
    function enzian_customizer_get_text_aligns() {
        return apply_filters( 'enzian-theme/font/text-aligns', array(
            'inherit' => esc_html__( 'Inherit', 'enzian' ),
            'center'  => esc_html__( 'Center', 'enzian' ),
            'justify' => esc_html__( 'Justify', 'enzian' ),
            'left'    => esc_html__( 'Left', 'enzian' ),
            'right'   => esc_html__( 'Right', 'enzian' ),
        ) );
    }   
}

/**
 * Get font weights
 *
 * @since 1.0.0
 * @return array
 */
if(!function_exists('enzian_customizer_get_font_weight')){
    function enzian_customizer_get_font_weight() {
        return apply_filters( 'enzian-theme/font/weight', array(
            '100' => '100',
            '200' => '200',
            '300' => '300',
            '400' => '400',
            '500' => '500',
            '600' => '600',
            '700' => '700',
            '800' => '800',
            '900' => '900',
        ) );
    }   
}

if(!function_exists('enzian_customizer_list_pages')){
	function enzian_customizer_list_pages(){
		$pages = get_pages();
		$opts = [
			'' => ''
		];
		foreach ($pages as $page){
			$opts[$page->ID] = $page->post_title;
		}
		return $opts;
	}
}