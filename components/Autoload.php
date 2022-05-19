<?php

/*
spl_autoload_register(function($class) {
    include 'classes/' . $class . '.class.php';
});
*/
spl_autoload_register(function($class) {
    # List all the class directories in the array.
    $array_paths = array(
        '/models/',
        '/components/'
    );

    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
});

// __autoload is deprecated!
/*
function __autoload($class_name)
{
    # List all the class directories in the array.
    $array_paths = array(
        '/models/',
        '/components/'
    );

    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}
*/