<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'tgmpa_register', 'enzian_register_required_plugins' );

if(!function_exists('lasf_get_plugin_source')){
    function lasf_get_plugin_source( $new, $initial, $plugin_name, $type = 'source'){
        if(isset($new[$plugin_name], $new[$plugin_name][$type]) && version_compare($initial[$plugin_name]['version'], $new[$plugin_name]['version']) < 0 ){
            return $new[$plugin_name][$type];
        }
        else{
            return $initial[$plugin_name][$type];
        }
    }
}

add_filter('Lakit_Theme_Manager/required_plugins', function (){
    return [
        'lastudio-element-kit'      => 'lastudio-element-kit/lastudio-element-kit.php',
        'revslider'                 => 'revslider/revslider.php',
        'enzian-demo-data'           => 'enzian-demo-data/index.php',
        'lastudio-pagespeed'        => 'lastudio-pagespeed/lastudio-pagespeed.php',
        'lastudio-updater'          => 'lastudio-updater/lastudio-updater.php',
    ];
});

if(!function_exists('enzian_register_required_plugins')){

    function enzian_register_required_plugins() {

        $initial_required = array(
            'lastudio-element-kit' => array(
                'source'    => 'https://la-studioweb.com/shared/plugins/lastudio-element-kit_v1.3.9.4.zip',
                'version'   => '1.3.9.4'
            ),
            'revslider' => array(
                'source'    => 'https://la-studioweb.com/shared/plugins/revslider_v6.7.11.zip',
                'version'   => '6.7.17'
            ),
            'enzian-demo-data' => array(
                'source'    => 'https://la-studioweb.com/shared/plugins/enzian-demo-data_v1.0.1.zip',
                'version'   => '1.0.1'
            ),
            'lastudio-pagespeed' => array(
                'source'    => 'https://la-studioweb.com/shared/plugins/lastudio-pagespeed_v1.0.8.zip',
                'version'   => '1.0.9'
            ),
            'lastudio-updater' => array(
                'source'    => 'https://la-studioweb.com/shared/plugins/lastudio-updater_v1.0.0.zip',
                'version'   => '1.0.0'
            )
        );

        $from_option = get_option('enzian_required_plugins_list', $initial_required);

        $plugins = array();

        $plugins[] = array(
            'name' 					=> esc_html_x('Elementor', 'admin-view', 'enzian'),
            'slug' 					=> 'elementor',
            'required' 				=> true,
            'version'				=> '3.23.4'
        );

        $plugins[] = array(
            'name'     				=> esc_html_x('LA-Studio Element Kit for Elementor', 'admin-view', 'enzian'),
            'slug'     				=> 'lastudio-element-kit',
            'source'				=> lasf_get_plugin_source($from_option, $initial_required, 'lastudio-element-kit'),
            'required'				=> true,
            'version'				=> lasf_get_plugin_source($from_option, $initial_required, 'lastudio-element-kit', 'version')
        );

        $plugins[] = array(
            'name'     				=> esc_html_x('WooCommerce', 'admin-view', 'enzian'),
            'slug'     				=> 'woocommerce',
            'version'				=> '9.1.4',
            'required' 				=> false
        );

        $plugins[] = array(
            'name'     				=> esc_html_x('Enzian Package Demo Data', 'admin-view', 'enzian'),
            'slug'					=> 'enzian-demo-data',
            'source'				=> lasf_get_plugin_source($from_option, $initial_required, 'enzian-demo-data'),
            'required'				=> false,
            'version'				=> lasf_get_plugin_source($from_option, $initial_required, 'enzian-demo-data', 'version')
        );

        $plugins[] = array(
            'name'     				=> esc_html_x('Envato Market', 'admin-view', 'enzian'),
            'slug'     				=> 'envato-market',
            'source'   				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
            'required' 				=> false,
            'version' 				=> '2.0.11'
        );

        $plugins[] = array(
            'name' 					=> esc_html_x('Contact Form 7', 'admin-view', 'enzian'),
            'slug' 					=> 'contact-form-7',
            'required' 				=> false
        );

        $plugins[] = array(
            'name'					=> esc_html_x('Slider Revolution', 'admin-view', 'enzian'),
            'slug'					=> 'revslider',
            'source'				=> lasf_get_plugin_source($from_option, $initial_required, 'revslider'),
            'required'				=> false,
            'version'				=> lasf_get_plugin_source($from_option, $initial_required, 'revslider', 'version')
        );

        $plugins[] = array(
            'name'					=> esc_html_x('LA-Studio Updater', 'admin-view', 'zumma'),
            'slug'					=> 'lastudio-updater',
            'source'				=> lasf_get_plugin_source($from_option, $initial_required, 'lastudio-updater'),
            'required'				=> false,
            'version'				=> lasf_get_plugin_source($from_option, $initial_required, 'lastudio-updater', 'version')
        );

        $config = array(
            'id'           				=> 'enzian',
            'default_path' 				=> '',
            'menu'         				=> 'tgmpa-install-plugins',
            'has_notices'  				=> true,
            'dismissable'  				=> true,
            'dismiss_msg'  				=> '',
            'is_automatic' 				=> false,
            'message'      				=> ''
        );

        tgmpa( $plugins, $config );

    }

}
