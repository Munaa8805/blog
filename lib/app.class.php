<?php

class App
{
    protected static $router;
    public static $db;
    public function run($uri)
    {
        self::$router = new Router($uri);
        self::$db = new Db();
        // Хэлний мэдээллийг ачаалах
        Lang::load(self::$router->getLanguage());

        $controller = ucfirst(self::$router->getController()) . 'Controller';
        // echo $controller;

        // echo '<br>';
        $action = self::$router->getMethodPrefix() . self::$router->getAction();
        // echo $action;

        // Контроллерийн функцийг нь дуудах
        $obj = new $controller();
        if (method_exists($controller, $action)) {
            echo $obj->$action();
        } else {
            echo "$controller классын $action method байхгүй байна.";
        }
    }

    public static function getRouter()
    {
        return self::$router;
    }
}