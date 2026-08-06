<?php
defined('ABSPATH') || exit;

final class K86SHOP_Cache
{
    public function get($key)
    {
        return wp_cache_get($key, 'k86shop');
    }

    public function set($key, $value, $expire = 3600)
    {
        return wp_cache_set($key, $value, 'k86shop', $expire);
    }

    public function delete($key)
    {
        return wp_cache_delete($key, 'k86shop');
    }
}

$GLOBALS['k86shop_cache'] = new K86SHOP_Cache();
