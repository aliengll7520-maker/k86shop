<?php
/**
 * Plugin Name: K86SHOP
 * Plugin URI: https://github.com/aliengll7520-maker/k86shop
 * Description: K86SHOP 4.0 - Review, Knowledge & Affiliate Platform.
 * Version: 4.0.0
 * Author: Liểng Sang
 * License: GPL-2.0-or-later
 * Text Domain: k86shop
 */

defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| Plugin Constants
|--------------------------------------------------------------------------
*/

define('K86SHOP_VERSION', '4.0.0');
define('K86SHOP_FILE', __FILE__);
define('K86SHOP_PATH', plugin_dir_path(__FILE__));
define('K86SHOP_URL', plugin_dir_url(__FILE__));

/*
|--------------------------------------------------------------------------
| Bootstrap
|--------------------------------------------------------------------------
*/

require_once K86SHOP_PATH . 'core/bootstrap.php';
