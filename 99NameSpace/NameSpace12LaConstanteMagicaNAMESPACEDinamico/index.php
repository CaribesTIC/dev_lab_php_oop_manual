<?php
namespace MyNameSpace;

class MyClass
{
    function __construct()
    {
        echo __METHOD__."<br/>";
    }
}

function instanciar($className)
{
    $a = __NAMESPACE__.'\\'.$className;
    return new $a();
}

$obj = instanciar('MyClass');

