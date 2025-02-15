<?php


class Router
{
    protected $uri;
    protected $controller;
    protected $action;
    protected $params;
    protected $route;
    protected $language;
    protected $method_prefix;

    public function __construct($uri)
    {
        /// Trim function removes from '/' from the start and end of the string
        $this->uri = urldecode(trim($uri, '/'));

        $this->controller = Config::get('default_controller');
        $this->action = Config::get('default_action');
        $this->language = Config::get('default_language');
        $this->route = Config::get('default_route');
        $routes = Config::get('routes');
        $this->method_prefix = $routes[$this->route] ?? '';
        // echo 'Router URI: ' . $uri . '<br>';

        //// URI parse example, looking for Route and Language
        $tokens = explode('?', $this->uri);
        // echo "<pre>";
        // print_r($tokens);
        $paths = explode('/', $tokens[0]);
        if (count($paths) > 0) {
            // Хэлийг байгаа эсэхийг шалгах
            if (in_array(current($paths), Config::get('languages'))) {
                $this->language = current($paths);
                array_shift($paths);
            }


            if (in_array(current($paths), array_keys($routes))) {
                $this->route = current($paths);
                $this->method_prefix = $routes[$this->route];
                array_shift($paths);
            }


            //// URI parse example, looking for Controller  
            if (current($paths)) {
                $this->controller = strtolower(current($paths));
                array_shift($paths);
            }
            //// URI parse example, looking for Action  
            if (current($paths)) {
                $this->action = strtolower(current($paths));
                array_shift($paths);
            }
            //// URI parse example, looking for Params
            $this->params = $paths;
            // echo "<pre>";
            // print_r('Router: ' . $this->getRoute() . PHP_EOL);
            // print_r('Language: ' . $this->getLanguage() . PHP_EOL);
            // print_r('Controller: ' . $this->getController() . PHP_EOL);
            // print_r('Action: ' . $this->getMethodPrefix() . $this->getAction() . PHP_EOL);
            // echo "Params:" . PHP_EOL;
            // print_r($this->getParams());
            // echo "</pre>";
        }
    }





    public function getUrl()
    {
        return $this->uri;
    }
    public function getController()
    {
        return $this->controller;
    }
    public function getAction()
    {
        return $this->action;
    }
    public function getParams()
    {
        return $this->params;
    }
    public function getRoute()
    {
        return $this->route;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function getMethodPrefix()
    {
        return $this->method_prefix;
    }
}