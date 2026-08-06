<?php
/**
 * K86SHOP 4.0
 * Core Container
 */

defined('ABSPATH') || exit;

/**
 * Container.
 */
class K86SHOP_Container
{
    private $services = array();

    public function set($key, $service)
    {
        $this->services[$key] = $service;
    }

    public function get($key)
    {
        return isset($this->services[$key]) ? $this->services[$key] : null;
    }
}

$GLOBALS['k86shop_container'] = new K86SHOP_Container();
