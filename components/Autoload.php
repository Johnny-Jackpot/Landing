<?php

spl_autoload_register(function ($className) {
    $arrPaths = [
        '/models/',
        '/components/',
        '/controllers/'
    ];
    
    foreach ($arrPaths as $path) {
        $path = ROOT . $path . $className . '.php';
        if (file_exists($path)) {
            include_once($path);
        }
    }
});