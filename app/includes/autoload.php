<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 3/22/20
 * Time: 10:28 AM
 */
spl_autoload_register(function ($classname){
    $file = dirname(__DIR__) . '\\src\\' . '\\Fruits\\' . $classname . '.php';
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    echo $file;
    if (file_exists($file)) {
        include $file;
    }
});