<?php

/*This file help us to auto load the classes.
So we don't need each time to include the class
*/
session_start();

spl_autoload_register('autoload');

function autoload($class_name)
{

    $array_paths = array(
        'database/',
        'app/classes',
        'models/',
        'controllers/'
    );

    $parts = explode('\\', $class_name);

    // Delete the last item in the array
    $name = array_pop($parts);

    foreach ($array_paths as $path) {

        $file = sprintf($path . '%s.php', $name);

        if (is_file($file)) {

            include_once $file;
        }
    }
}
