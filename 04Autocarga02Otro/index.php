<?php

spl_autoload_register(function ($className) {
    include $className . '.php';
});

$obj  = new MiClase();

var_dump($obj);

