<?php
/**
 * K86SHOP 4.0
 * Core Hooks
 */

defined('ABSPATH') || exit;

if (!function_exists('k86shop_register_hooks')) {

    function k86shop_register_hooks(): void
    {
        // Admin
        add_action('admin_menu', 'k86shop_admin_menu');

        // Init
        add_action('init', 'k86shop_init');

        // Activation / Deactivation hooks
    }

}

/*
|--------------------------------------------------------------------------
| Register Hooks
|--------------------------------------------------------------------------
*/

k86shop_register_hooks();
