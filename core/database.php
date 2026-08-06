<?php
/**
 * K86SHOP 4.0
 * Core Database
 */

defined('ABSPATH') || exit;

if (!class_exists('K86SHOP_Database')) {

    final class K86SHOP_Database
    {
        /**
         * WordPress Database.
         */
        private wpdb $db;

        /**
         * Constructor.
         */
        public function __construct()
        {
            global $wpdb;

            $this->db = $wpdb;
        }

        /**
         * Get database instance.
         */
        public function db(): wpdb
        {
            return $this->db;
        }

        /**
         * Get table name.
         */
        public function table(string $name): string
        {
            return $this->db->prefix . 'k86shop_' . $name;
        }

        /**
         * WordPress prefix.
         */
        public function prefix(): string
        {
            return $this->db->prefix;
        }
    }
}

/*
|--------------------------------------------------------------------------
| Global Database
|--------------------------------------------------------------------------
*/

$GLOBALS['k86shop_database'] = new K86SHOP_Database();
