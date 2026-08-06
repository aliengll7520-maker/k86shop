<?php
/**
 * K86SHOP 4.0
 * Core Registry
 */

defined('ABSPATH') || exit;

if (!class_exists('K86SHOP_Registry')) {

    final class K86SHOP_Registry
    {
        /**
         * Registered items.
         *
         * @var array
         */
        private array $items = [];

        /**
         * Register an item.
         */
        public function register(string $key, mixed $value): void
        {
            $this->items[$key] = $value;
        }

        /**
         * Get an item.
         */
        public function get(string $key): mixed
        {
            return $this->items[$key] ?? null;
        }

        /**
         * Check if an item exists.
         */
        public function has(string $key): bool
        {
            return isset($this->items[$key]);
        }

        /**
         * Return all registered items.
         */
        public function all(): array
        {
            return $this->items;
        }
    }
}

/*
|--------------------------------------------------------------------------
| Global Registry
|--------------------------------------------------------------------------
*/

$GLOBALS['k86shop_registry'] = new K86SHOP_Registry();
