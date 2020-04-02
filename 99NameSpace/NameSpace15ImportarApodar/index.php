<?php
namespace MyNameSpace;

use MyNameSpace as Apodo;

class MyClase
{
    function __construct()
    {
        echo __METHOD__."<br/>";
    }
}

function myFunction()
{    
    echo __FUNCTION__."<br/>";
}

const MYCONST = "1<br/>";

$obj = new Apodo\MyClase(); 

Apodo\myFunction();

echo Apodo\MYCONST;

