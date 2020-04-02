<?php
namespace MyNameSpace;

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

const MYCONST = 1;

