<?php

namespace App\Helpers;

class Params
{
    /**
     * Keep all the parameters
     *
     * @var array
     */
    private static $params = array();

    /**
     * Get parameter value
     *
     * @param string $key
     * @return string
     */
    public static function get($key)
    {
        if (array_key_exists($key, self::$params)) {
            return self::$params[$key];
        } else {
            return null;
        }
    }

    /**
     * Set paramters key & value
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public static function set($key, $value)
    {
        self::$params[$key] = $value;
    }

    /**
     * Get the parameter array
     *
     * @return array
     */
    public static function all()
    {
        return self::$params;
    }
}