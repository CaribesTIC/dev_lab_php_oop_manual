<?php

spl_autoload_register(function ($className) {

    echo "Intentando cargar $className \n";

    if (!file_exists($className . '.php')) {
        throw new Exception("Imposible cargar " . $className);
    }

    include $className . '.php';
    
});

try {
    $obj = new MiClase();
    var_dump($obj);
    $obj1 = new ClaseNoCargable();
    var_dump($obj1);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

