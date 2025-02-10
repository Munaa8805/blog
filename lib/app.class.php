<?php

class App
{
    protected static $router;
    public function run($uri)
    {
        self::$router = new Router($uri);
        $controller = ucfirst(self::$router->getController()) . 'Controller';
        // echo $controller;

        // echo '<br>';
        $action = self::$router->getMethodPrefix() . self::$router->getAction();
        // echo $action;

        // echo '<br>';
        $obj = new $controller;
        if (method_exists($obj, $action)) {
            $obj->$action();
        } else {
            echo "Method $action not found in controller $controller";
        }
    }

    public static function getRouter()
    {
        return self::$router;
    }
}