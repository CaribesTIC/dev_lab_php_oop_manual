<?php 

class Foo
{
    public $bar;
    
    public function __construct() 
    {
        $this->bar = function() {
            return 42;
        };
    }
}

// A partir de PHP 5.3.0:
$obj = new Foo();
$func = $obj->bar;
echo $func(), PHP_EOL;

// Alternativamente, a partir de PHP 7.0.0:
//echo ($obj->bar()), PHP_EOL;
