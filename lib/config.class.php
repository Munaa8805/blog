<?php


class Config
{
    protected static $settings = [];

    public static function set($key, $value)
    {
        self::$settings[$key] = $value;
    }
    public static function get($key)
    {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }
}
