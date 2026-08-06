<?php
/**
 * K86SHOP 4.0
 * Core Router
 */

defined('ABSPATH') || exit;

if (!class_exists('K86SHOP_Router')) {

    final class K86SHOP_Router
    {
        /**
         * Register routes.
         */
        public function register(): void
        {
            // Register admin routes.

            // Register frontend routes.

            // Register API routes.
        }

        /**
         * Dispatch request.
         */
        public function dispatch(): void
        {
            // Route current request.
        }
    }
}

/*
|--------------------------------------------------------------------------
| Router Instance
|--------------------------------------------------------------------------
*/

$GLOBALS['k86shop_router'] = new K86SHOP_Router();
$GLOBALS['k86shop_router']->register();
