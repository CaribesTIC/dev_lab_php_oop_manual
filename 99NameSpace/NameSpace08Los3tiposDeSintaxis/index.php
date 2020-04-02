<?php
include 'MyNameSpace.php';

class MyClass1
{
    function __construct()
    {
        echo __METHOD__."<br/>";
    }
}

function myFunction1()
{    
    echo __FUNCTION__."<br/>";
}

const MYCONST1 = "1<br/><br/>";

$obj1 = new MyClass1();
myFunction1();
echo MYCONST1;

$obj2 = new MyNameSpace\MyClass2();
MyNameSpace\myFunction2();
echo MyNameSpace\MYCONST2; 

$obj3 = new MyNameSpace\SubNivel\MyClass3();
MyNameSpace\SubNivel\myFunction3();
echo MyNameSpace\SubNivel\MYCONST3;


