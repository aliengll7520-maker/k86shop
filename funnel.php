<?php
/**
 * Plugin Name: K86SHOP Funnel
 * Plugin URI: https://k86shop.com
 * Description: Frontend Content Funnel cho K86SHOP.
 * Version: 1.0.0
 * Author: Liểng Sang
 * License: GPL2+
 * Text Domain: k86shop-funnel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'K86SHOP_FUNNEL_VERSION', '1.0.0' );
define( 'K86SHOP_FUNNEL_PATH', plugin_dir_path( __FILE__ ) );
define( 'K86SHOP_FUNNEL_URL', plugin_dir_url( __FILE__ ) );

/**
 * Enqueue Assets
 */
function k86shop_funnel_enqueue_assets() {

	wp_enqueue_style(
		'k86shop-funnel-style',
		K86SHOP_FUNNEL_URL . 'assets/funnel-style.css',
		array(),
		K86SHOP_FUNNEL_VERSION
	);

	wp_enqueue_script(
		'k86shop-funnel-script',
		K86SHOP_FUNNEL_URL . 'assets/funnel-script.js',
		array(),
		K86SHOP_FUNNEL_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'k86shop_funnel_enqueue_assets' );

/**
 * Shortcode
 */
function k86shop_funnel_shortcode( $atts = array() ) {

	$data_bridge = K86SHOP_FUNNEL_PATH . 'data-bridge.php';

	if ( ! file_exists( $data_bridge ) ) {
		return '';
	}

	$funnel_data = require $data_bridge;

	if ( empty( $funnel_data ) || ! is_array( $funnel_data ) ) {
		return '';
	}

	$layout = K86SHOP_FUNNEL_PATH . 'render-layout.php';

	if ( ! file_exists( $layout ) ) {
		return '';
	}

	ob_start();

	require $layout;

	return ob_get_clean();
}

add_shortcode( 'k86shop_funnel', 'k86shop_funnel_shortcode' );
