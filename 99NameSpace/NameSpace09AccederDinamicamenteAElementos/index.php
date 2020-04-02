<?php
class NombreClase
{
    function __construct()
    {
        echo __METHOD__."<br/>";
    }
}

function nombreFunc()
{    
    echo __FUNCTION__."<br/>";
}

const NOMBRE_CONST="global";

$a="NombreClase";
$obj = new $a(); // imprime NombreClase::__construct

$b = "nombreFunc";
$b(); // imprime nombreFunc

echo constant("NOMBRE_CONST"); // imprime global

