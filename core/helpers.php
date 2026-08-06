<?php
/**
 * K86SHOP 4.0
 * Core Helpers
 */

defined('ABSPATH') || exit;

if (!function_exists('k86shop_version')) {

    /**
     * Get plugin version.
     */
    function k86shop_version(): string
    {
        return K86SHOP_VERSION;
    }
}

if (!function_exists('k86shop_path')) {

    /**
     * Get plugin path.
     */
    function k86shop_path(string $path = ''): string
    {
        return K86SHOP_PATH . ltrim($path, '/');
    }
}

if (!function_exists('k86shop_url')) {

    /**
     * Get plugin url.
     */
    function k86shop_url(string $path = ''): string
    {
        return K86SHOP_URL . ltrim($path, '/');
    }
}

if (!function_exists('k86shop_is_admin')) {

    /**
     * Check admin area.
     */
    function k86shop_is_admin(): bool
    {
        return is_admin();
    }
}
