<?php
/**
 * K86SHOP 4.0
 * Core Logger
 */

defined('ABSPATH') || exit;

if (!class_exists('K86SHOP_Logger')) {

    final class K86SHOP_Logger
    {
        /**
         * Write log.
         */
        public function write(string $level, string $message, array $context = []): void
        {
            if (defined('WP_DEBUG') && WP_DEBUG) {

                $record = sprintf(
                    '[K86SHOP] [%s] %s %s',
                    strtoupper($level),
                    $message,
                    !empty($context) ? wp_json_encode($context) : ''
                );

                error_log($record);
            }
        }

        /**
         * Info log.
         */
        public function info(string $message, array $context = []): void
        {
            $this->write('info', $message, $context);
        }

        /**
         * Warning log.
         */
        public function warning(string $message, array $context = []): void
        {
            $this->write('warning', $message, $context);
        }

        /**
         * Error log.
         */
        public function error(string $message, array $context = []): void
        {
            $this->write('error', $message, $context);
        }
    }
}

/*
|--------------------------------------------------------------------------
| Global Logger
|--------------------------------------------------------------------------
*/

$GLOBALS['k86shop_logger'] = new K86SHOP_Logger();
