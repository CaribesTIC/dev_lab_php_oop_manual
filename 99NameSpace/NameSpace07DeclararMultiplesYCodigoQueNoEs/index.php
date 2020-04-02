<?php
declare(encoding='UTF-8');
namespace MyNameSpace
{
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
}

namespace
{
    $obj = new MyNameSpace\MyClase(); 

    MyNameSpace\myFunction();

    echo MyNameSpace\MYCONST;
}






