<?php
/**
 * K86SHOP 4.0
 * Core Registry
 */

defined('ABSPATH') || exit;

/**
 * Registry.
 */
class K86SHOP_Registry
{
    private $items = array();

    public function set($key, $value)
    {
        $this->items[$key] = $value;
    }

    public function get($key)
    {
        return isset($this->items[$key]) ? $this->items[$key] : null;
    }
}

$GLOBALS['k86shop_registry'] = new K86SHOP_Registry();
