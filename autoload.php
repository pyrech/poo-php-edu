<?php

function my_autoload($className) {
    $filename = "src/" . str_replace("\\", DIRECTORY_SEPARATOR, $className) . ".php";
    if (file_exists($filename)) {
        require_once $filename;

        if (class_exists($className)) {
            return true;
        }
    }

    return false;
}

spl_autoload_register('my_autoload');
