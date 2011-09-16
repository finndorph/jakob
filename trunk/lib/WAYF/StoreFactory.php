<?php
namespace WAYF;

class StoreFactory
{
    // The parameterized factory method
    public static function createInstance($config)
    {
        $classname = "WAYF\Store\\" . $config['type'] . "Store";
        if (class_exists($classname, true)) {
            $store = new $classname($config['options']);
            return $store;
        }
        return null;
    }
}
