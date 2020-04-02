<?php
class ClaseSencilla {}

$instancia1 = new ClaseSencilla();

// Esto también se puede hacer con una variable:
$nombreClase = 'ClaseSencilla';
$instancia2 = new $nombreClase(); // new ClaseSencilla()

var_dump($instancia1);
var_dump($instancia2);

