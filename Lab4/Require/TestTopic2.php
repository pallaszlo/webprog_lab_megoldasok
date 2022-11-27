<?php
include "loader.php";
/*
function __autoload($class_name) {
    require_once $class_name . '.php';
}
*/
/*
spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        throw new Exception("Hianyzo fajl!");
    }
});
*/

try {
    $aMember = new Member("fred", "Chicago", "http://example.com/");
    echo $aMember->getUsername() . " lives in " . $aMember->getLocation() . "<br>";
    $aMember->save();
    $aTopic = new Topicc("Teddy Bears are Great", $aMember);
    $aTopic->showHeader();
    $aTopic->save();
} catch (Exception $e) {
    echo $e->getMessage();
}



