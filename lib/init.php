<?php




spl_autoload_register(function ($class_name) {

    $class_name = strtolower($class_name);

    $lib_path = ROOT . DS . 'lib' . DS . $class_name . '.class.php';
    $models_path = ROOT . DS . 'models' . DS . $class_name . '.class.php';

    $controller_path = ROOT . DS . 'controllers' . DS . str_replace('controller', '.controller', $class_name) . '.php';
    if (file_exists($lib_path)) {
        require_once $lib_path;
    } elseif (file_exists($models_path)) {
        require_once $models_path;
    } elseif (file_exists($controller_path)) {
        require_once $controller_path;
    } else {
        // die('The file does not exist.');
        throw new Exception('The file does not exist.');
    }
    // echo $lib_path . '<br>';
});
require_once ROOT . DS . 'config' . DS . 'config.php';
