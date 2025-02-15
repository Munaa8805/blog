<?php

// phpinfo();
//// use_cookies = 0 -> this not use cookies to store session id
/// canonic url: http://localhost:8080/index.php?PHPSESSID=1
session_start([
    'use_cookies' => 0,
]);
// $_SESSION['name'] = 'John';
// var_dump($_SESSION);
// echo $_SERVER['REQUEST_URI'];

const DS = DIRECTORY_SEPARATOR;

define('ROOT', dirname(dirname(__FILE__)));
const VIEWS_PATH = ROOT . DS . 'views' . DS;

// echo DIRECTORY_SEPARATOR . '<br>';
require_once ROOT . DS . 'lib' . DS . 'init.php';

$router = new Router($_SERVER['REQUEST_URI']);


$app = new App();
$app->run($_SERVER['REQUEST_URI']);
