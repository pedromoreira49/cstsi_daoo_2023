<?php

    spl_autoload_register(function ($class){
        $path = implode("/", explode('\\', $class));
        require_once $path . '.php';
    })
?>