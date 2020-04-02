<?php
//namespace{ // código global

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

    $obj = new namespace\MyClase(); 

    namespace\myFunction();

    echo namespace\MYCONST;

//}
