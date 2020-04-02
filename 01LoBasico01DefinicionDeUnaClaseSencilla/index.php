<?php
//Declaración de una clase
class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;
    }
}
//Instanciación de la clase
$a = new ClaseSencilla();

$a->mostrarVar();

