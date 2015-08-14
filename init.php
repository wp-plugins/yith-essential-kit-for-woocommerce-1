<?php
/*
Plugin Name: YITH Essential Kit for WooCommerce #1
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: With YITH Essential Kit for WooCommerce #1 you will be free to add new and powerful features to make your e-commerce site unique. Activate the plugin you want and start using your site to a new and improved level.
Text Domain: yith-jetpack
Domain Path: /languages/
Author: YIThemes
Author URI: http://yithemes.com/
Version: 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if ( ! function_exists( 'is_plugin_active' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

if ( ! defined( 'YJP_DIR' ) ) {
    define( 'YJP_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'YJP_URL' ) ) {
    define( 'YJP_URL', plugins_url( '/', __FILE__ ) );
}

if ( ! defined( 'YJP_ASSETS_URL' ) ) {
    define( 'YJP_ASSETS_URL', YJP_URL . 'assets' );
}

if ( ! defined( 'YJP_TEMPLATE_PATH' ) ) {
    define( 'YJP_TEMPLATE_PATH', YJP_DIR . 'templates' );
}

if ( ! function_exists( 'yith_plugin_registration_hook' ) ) {
    require_once 'plugin-fw/yit-plugin-registration-hook.php';
}
register_activation_hook( __FILE__, 'yith_plugin_registration_hook' );

require_once( YJP_DIR. 'yith-jetpack.php' );

$jetpack1 = new YITH_JetPack( __FILE__ , 'YITH Essential Kit for WooCommerce #1' , 1 ) ;