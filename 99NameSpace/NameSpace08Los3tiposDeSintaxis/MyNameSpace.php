<?php
namespace MyNameSpace;

include 'SubNivel.php';

class MyClass2
{
    function __construct()
    {
        echo __METHOD__."<br/>";
    }
}

function myFunction2()
{    
    echo __FUNCTION__."<br/>";
}

const MYCONST2 = "2<br/><br/>";

$obj = new \MyClass1();
\myFunction1();
//    echo \MYCONST1;

$obj = new MyClass2();
myFunction2();
echo MYCONST2;

$obj = new SubNivel\MyClass3();
SubNivel\myFunction3();
echo SubNivel\MYCONST3;

