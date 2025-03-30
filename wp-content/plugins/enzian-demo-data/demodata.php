<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

function la_enzian_get_demo_array($dir_url, $dir_path){

    $demo_items = array(
        'cosmetic-store-01' => array(
            'link'          => 'https://enzian.la-studioweb.com/cosmetic-store-01/',
            'title'         => 'Cosmetic Store 01',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'enzian-header-01' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'enzian-footer-02' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'cosmetic-store-02' => array(
            'link'          => 'https://enzian.la-studioweb.com/cosmetic-store-02/',
            'title'         => 'Cosmetic Store 02',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'enzian-header-01' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'enzian-footer-02' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'perfume-store-01' => array(
            'link'          => 'https://enzian.la-studioweb.com/perfume-store-01/',
            'title'         => 'Perfume Store 01',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'enzian-perfume-01' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'enzian-footer-03' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'cosmetic-store-03' => array(
            'link'          => 'https://enzian.la-studioweb.com/cosmetic-store-03/',
            'title'         => 'Cosmetic Store 03',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'enzian-header-01' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'enzian-footer-03' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'cosmetic-store-04' => array(
            'link'          => 'https://enzian.la-studioweb.com/cosmetic-store-04/',
            'title'         => 'Cosmetic Store 04',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'enzian-header-02' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'enzian-footer-02' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'cosmetic-store-05' => array(
            'link'          => 'https://enzian.la-studioweb.com/cosmetic-store-05/',
            'title'         => 'Cosmetic Store 05',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'enzian-header-01' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'enzian-footer-01' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
        'cosmetic-store-06' => array(
            'link'          => 'https://enzian.la-studioweb.com/cosmetic-store-06/',
            'title'         => 'Cosmetic Store 05',
            'data_elementor'=> [
                'header'       => [
                    'location' => 'header',
                    'value' => [
                        'enzian-header-03' => 'include/general',
                    ],
                ],
                'footer'       => [
                    'location' => 'footer',
                    'value' => [
                        'enzian-footer-04' => 'include/general',
                    ],
                ],
            ],
            'category'      => array(
                'Demo',
            )
        ),
    );

    $default_image_setting = array(
        'woocommerce_single_image_width' => 600,
        'woocommerce_thumbnail_image_width' => 300,
        'woocommerce_thumbnail_cropping' => 'custom',
        'woocommerce_thumbnail_cropping_custom_width' => 1,
        'woocommerce_thumbnail_cropping_custom_height' => 1,
        'thumbnail_size_w' => 0,
        'thumbnail_size_h' => 0,
        'medium_size_w' => 0,
        'medium_size_h' => 0,
        'medium_large_size_w' => 0,
        'medium_large_size_h' => 0,
        'large_size_w' => 0,
        'large_size_h' => 0,
    );

    $default_menu = array(
        'main-nav'              => 'Primary Navigation'
    );

    $default_page = array(
        'page_for_posts' 	            => 'Blog',
        'woocommerce_shop_page_id'      => 'Shop',
        'woocommerce_cart_page_id'      => 'Shopping Cart',
        'woocommerce_checkout_page_id'  => 'Checkout',
        'woocommerce_myaccount_page_id' => 'My Account'
    );

    $slider = $dir_path . 'Slider/';
    $content = $dir_path . 'Content/';
    $product = $dir_path . 'Product/';
    $widget = $dir_path . 'Widget/';
    $setting = $dir_path . 'Setting/';
    $preview = $dir_url;

    $default_elementor = [
        'single-post'       => [
            'location' => 'single',
            'value' => [
                'enzian-single-post-01' => 'include/singular/post',
            ],
        ],
        'single-page'       => [
            'location' => 'single',
            'value' => [
                'enzian-woocommerce-pages' => [
                    'include/singular/page/wishlist',
                    'include/singular/page/compare',
                    'include/singular/page/cart',
                    'include/singular/page/checkout'
                ],
            ]
        ],
        'archive'           => [
            'location' => 'archive',
            'value' => [
                'enzian-blog-sidebar' => 'include/archive'
            ]
        ],
        'search-results'    => [
            'location' => 'archive',
            'value'    => '',
            'default' => [
                'name' => 'include/archive/search'
            ],
        ],
        'error-404'         => [
            'location' => 'single',
            'value' => [
                'enzian-404-page' => 'include/singular/not_found404'
            ],
            'default' => [
	            'name' => 'include/singular/not_found404'
            ],
        ],
        'product'           => [
            'location' => 'single',
            'value' => [
                'enzian-product-layout-01' => 'include/product'
            ]
        ],
        'product-archive'   => [
            'location' => 'archive',
            'value' => [
                'enzian-shop-sidebar' => 'include/product_archive'
            ]
        ],
    ];

    $elementor_kit_settings = json_decode('{"page_title_selector":"h1.entry-title","active_breakpoints":["viewport_mobile","viewport_mobile_extra","viewport_tablet","viewport_laptop"],"viewport_mobile":767,"viewport_md":768,"viewport_mobile_extra":991,"viewport_tablet":1279,"viewport_lg":1280,"viewport_laptop":1599,"system_colors":[{"_id":"primary","title":"Primary"},{"_id":"secondary","title":"Secondary"},{"_id":"text","title":"Text"},{"_id":"accent","title":"Accent"}],"system_typography":[{"_id":"primary","title":"Primary"},{"_id":"secondary","title":"Secondary"},{"_id":"text","title":"Text"},{"_id":"accent","title":"Accent"}],"custom_colors":[{"_id":"746a387","title":"EnzialColor1","color":"#D17474"},{"_id":"501ef18","title":"EnzialColor2","color":"#222222"},{"_id":"b70b612","title":"EnzialColor3","color":"#A8A8A8"},{"_id":"68edd31","title":"EnzialColor4","color":"#808080"},{"_id":"7a7a594","title":"EnzialSubMenuBg","color":"#2B2B2B"},{"_id":"7581bcc","title":"EnzialSubMenuColor","color":"#FFFFFF"},{"_id":"eb32b7c","title":"EnzialColor5","color":"#353535"},{"_id":"7b9d61c","title":"EnzialColor6","color":"#D0A97D"},{"_id":"f4e7d0c","title":"EnzialColor7","color":"#A56337"},{"_id":"0505871","title":"EnzialColor8","color":"#DE6A8D"},{"_id":"1ba3ebd","title":"EnzialColor9","color":"#DFB58B"},{"_id":"6ad2cee","title":"EnzialColor10","color":"#EF9350"}],"custom_typography":[{"_id":"b04813e","title":"Enzian Heading 64","typography_typography":"custom","typography_font_family":"Cormorant","typography_font_size":{"unit":"px","size":64,"sizes":[]},"typography_font_weight":"600","typography_line_height":{"unit":"em","size":1.2,"sizes":[]}},{"_id":"c61c83a","title":"Enzian Text 20","typography_typography":"custom","typography_font_size":{"unit":"px","size":20,"sizes":[]},"typography_font_weight":"normal","typography_line_height":{"unit":"em","size":1.8,"sizes":[]}},{"_id":"85efd65","title":"Enzian Heading 36","typography_typography":"custom","typography_font_family":"Cormorant","typography_font_size":{"unit":"px","size":36,"sizes":[]},"typography_font_weight":"500","typography_line_height":{"unit":"em","size":1.2,"sizes":[]}},{"_id":"e3c1a7e","title":"Enzian Text 22","typography_typography":"custom","typography_font_size":{"unit":"px","size":22,"sizes":[]},"typography_font_weight":"300","typography_line_height":{"unit":"em","size":1.6,"sizes":[]}},{"_id":"ed9312a","title":"Enzian Heading 56","typography_typography":"custom","typography_font_family":"DM Serif Display","typography_font_size":{"unit":"px","size":56,"sizes":[]},"typography_font_weight":"normal","typography_line_height":{"unit":"em","size":1.2,"sizes":[]}},{"_id":"e31aea0","title":"Enzian Heading 42","typography_typography":"custom","typography_font_family":"DM Serif Display","typography_font_size":{"unit":"px","size":42,"sizes":[]},"typography_font_weight":"normal","typography_line_height":{"unit":"em","size":1.4,"sizes":[]}},{"_id":"1465576","title":"Enzian Text 15","typography_typography":"custom","typography_font_size":{"unit":"px","size":15,"sizes":[]},"typography_line_height":{"unit":"em","size":1.6,"sizes":[]}},{"_id":"25d430d","title":"Enzian Menu Lv0","typography_typography":"custom","typography_font_size":{"unit":"px","size":18,"sizes":[]},"typography_font_weight":"300","typography_font_size_tablet":{"unit":"px","size":17,"sizes":[]}},{"_id":"77abfa7","title":"Enzian Menu Lv1","typography_typography":"custom","typography_font_size":{"unit":"px","size":14,"sizes":[]},"typography_font_weight":"500"}],"default_generic_fonts":"sans-serif"}', true);

    $data_return = array();

    foreach ($demo_items as $demo_key => $demo_detail){
	    $value = array();

	    $value['title']             = $demo_detail['title'];
	    $value['category']          = !empty($demo_detail['category']) ? $demo_detail['category'] : array('Demo');
	    $value['demo_preset']       = $demo_key;
	    $value['demo_url']          = $demo_detail['link'];
	    $value['preview']           = !empty($demo_detail['preview']) ? $demo_detail['preview'] : ($preview . $demo_key . '.jpg');
	    $value['option']            = $setting . $demo_key . '.json';
	    $value['content']           = !empty($demo_detail['data_sample']) ? $content . $demo_detail['data_sample'] : $content . 'demo-data.json';
	    $value['product']           = !empty($demo_detail['data_product']) ? $product . $demo_detail['data_product'] : $product . 'products.csv';
	    $value['widget']            = !empty($demo_detail['data_widget']) ? $widget . $demo_detail['data_widget'] : $widget . 'widgets.json';
	    $value['pages']             = array_merge( $default_page, array( 'page_on_front' => $demo_detail['title'] ));
	    $value['menu-locations']    = array_merge( $default_menu, isset($demo_detail['menu-locations']) ? $demo_detail['menu-locations'] : array());
	    $value['other_setting']     = array_merge( $default_image_setting, isset($demo_detail['other_setting']) ? $demo_detail['other_setting'] : array());
	    if(!empty($demo_detail['data_slider'])){
		    $value['slider'] = $slider . $demo_detail['data_slider'];
	    }
        $value['elementor']         = array_merge( $default_elementor, isset($demo_detail['data_elementor']) ? $demo_detail['data_elementor'] : array());
        $value['elementor_kit_settings']         = array_merge( $elementor_kit_settings, isset($demo_detail['elementor_kit_settings']) ? $demo_detail['elementor_kit_settings'] : array());
	    $data_return[$demo_key] = $value;
    }

    return $data_return;
}