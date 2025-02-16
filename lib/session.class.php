<?php

class Session
{
    protected static $message;

    public static function setMessage($message)
    {
        self::$message = $message;
    }

    public static function hasMessage()
    {
        return !is_null(self::$message);
    }

    public static function flash()
    {
        $message = self::$message;
        self::$message = null;
        return $message;
    }
}
