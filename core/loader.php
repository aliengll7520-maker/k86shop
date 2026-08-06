<?php
/**
 * K86SHOP 4.0
 * Core Loader
 */

defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| Load Core Components
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/hooks.php';
require_once __DIR__ . '/router.php';
require_once __DIR__ . '/registry.php';
require_once __DIR__ . '/container.php';
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/cache.php';
require_once __DIR__ . '/logger.php';
require_once __DIR__ . '/helpers.php';

/*
|--------------------------------------------------------------------------
| Boot Core
|--------------------------------------------------------------------------
*/

if (!function_exists('k86shop_boot')) {

    function k86shop_boot(): void
    {
        // Core boot sequence.
    }

}
