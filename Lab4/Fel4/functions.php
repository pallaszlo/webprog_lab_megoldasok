<?php
//namespace Lab4\Fel4;

function loadModel(string $className)
{
    //$file = __DIR__ . '\\' . $className . '.php';
    //$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);

    //echo $className;
    //$path_to_file = 'Model/' . $className . '.php';
    $path_to_file = $className . '.php';
    //echo $path_to_file;
    if (file_exists($path_to_file)) {
        include $path_to_file;
    } else {
        throw new \Exception("Hianyzo fajl!");
    }
}

function loadDatabase($class_name)
{
    $path_to_file = $class_name . '.php';
    echo $path_to_file;
    if (file_exists($path_to_file)) {
        require $path_to_file;
    } else {
        throw new \Exception("Hianyzo fajl!");
    }
}

function loadUtils($class_name)
{
    $path_to_file = 'Utils/' . $class_name . '.php';
    echo $path_to_file;
    if (file_exists($path_to_file)) {
        require $path_to_file;
    } else {
        throw new \Exception("Hianyzo fajl!");
    }
}

spl_autoload_register('loadModel');
spl_autoload_register('loadDatabase');
spl_autoload_register('loadUtils');
