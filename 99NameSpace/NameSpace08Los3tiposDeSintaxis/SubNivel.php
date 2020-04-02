<?php
namespace MyNameSpace\SubNivel;

class MyClass3
{
    function __construct()
    {
        echo __METHOD__."<br/>";
    }
}

function myFunction3()
{    
    echo __FUNCTION__."<br/>";
}

const MYCONST3 = "3<br/><br/>";

$obj1 = new \MyClass1();
\myFunction1();
//    echo \MYCONST1;

$obj2 = new \MyNameSpace\MyClass2();
\MyNameSpace\myFunction2();
//    echo \MyNameSpace\MYCONST2;

$obj = new MyClass3();
myFunction3();
echo MYCONST3;

