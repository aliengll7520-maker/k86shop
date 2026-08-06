<?php
/**
 * K86SHOP 4.0
 * Core Cache
 */

defined('ABSPATH') || exit;

if (!class_exists('K86SHOP_Cache')) {

    final class K86SHOP_Cache
    {
        /**
         * Cache group.
         */
        private string $group = 'k86shop';

        /**
         * Get cache.
         */
        public function get(string $key, mixed $default = null): mixed
        {
            $value = wp_cache_get($key, $this->group);

            return ($value === false) ? $default : $value;
        }

        /**
         * Set cache.
         */
        public function set(string $key, mixed $value, int $expire = 3600): bool
        {
            return wp_cache_set($key, $value, $this->group, $expire);
        }

        /**
         * Delete cache.
         */
        public function delete(string $key): bool
        {
            return wp_cache_delete($key, $this->group);
        }

        /**
         * Flush cache group.
         */
        public function flush(): bool
        {
            return wp_cache_flush();
        }
    }
}

/*
|--------------------------------------------------------------------------
| Global Cache
|--------------------------------------------------------------------------
*/

$GLOBALS['k86shop_cache'] =
