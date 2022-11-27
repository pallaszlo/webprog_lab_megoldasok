<?php
function load_model($class_name)
{
    echo $class_name;
    $path_to_file = 'Model/' . $class_name . '.php';
    echo $path_to_file;

    if (file_exists($path_to_file)) {
        require $path_to_file;
    }
}

function load_model2($className)
{
    echo $className."<br>";
    $file = __DIR__ . '\\' . $className . '.php';
    echo $file."<br>";
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    echo $file."<br>";
    if (file_exists($file)) {
        include $file;
    }
}

function load_model3($class_name)
{

    $namespace = 'Store\\';

    if (strpos($class_name, $namespace) !== 0) {
        return;
    }

    $class_name = str_replace($namespace, '', $class_name);
    echo $class_name."<br>";
    $path_to_file = $class_name . '.php';
    //$path_to_file = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
    echo $path_to_file;


    if (file_exists($path_to_file)) {
        require_once($path_to_file);
    }
}



spl_autoload_register('load_model3');
