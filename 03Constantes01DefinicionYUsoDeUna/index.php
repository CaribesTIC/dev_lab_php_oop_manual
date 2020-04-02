<?php
class MiClase
{
    const CONSTANTE = 'valor constante';

    function mostrarConstante() {
        echo  self::CONSTANTE . "\n";
    }
}

echo MiClase::CONSTANTE . "\n";

$nombreclase = "MiClase";
echo $nombreclase::CONSTANTE . "\n"; // A partir de PHP 5.3.0

$clase = new MiClase();
$clase->mostrarConstante();

echo $clase::CONSTANTE."\n"; // A partir de PHP 5.3.0

