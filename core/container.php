<?php
/**
 * K86SHOP 4.0
 * Core Container
 */

defined('ABSPATH') || exit;

if (!class_exists('K86SHOP_Container')) {

    final class K86SHOP_Container
    {
        /**
         * Shared services.
         *
         * @var array
         */
        private array $services = [];

        /**
         * Bind a service.
         */
        public function bind(string $name, object $service): void
        {
            $this->services[$name] = $service;
        }

        /**
         * Get a service.
         */
        public function get(string $name): ?object
        {
            return $this->services[$name] ?? null;
        }

        /**
         * Check service exists.
         */
        public function has(string $name): bool
        {
            return isset($this->services[$name]);
        }

        /**
         * Return all services.
         */
        public function all(): array
        {
            return $this->services;
        }
    }
}

/*
|--------------------------------------------------------------------------
| Global Container
|--------------------------------------------------------------------------
*/

$GLOBALS['k86shop_container'] = new K86SHOP_Container();
