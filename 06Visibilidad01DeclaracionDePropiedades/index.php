<?php
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

}

class MyClass2 extends MyClass
{
    // Se pueden redeclarar las propiedades pública y protegida, pero no la privada

    function printHello()
    {
        echo $this->public;     // Muestra Public
        echo $this->protected;  // Muestra Protected
        echo $this->private;    // Undefined
    }
}


$obj2 = new MyClass2();
echo $obj2->public;    // Muestra Public
//echo $obj2->protected; // Error Fatal
echo $obj2->private;   // Undefined
$obj2->printHello();   // Muestra Public, Protected, Undefined

