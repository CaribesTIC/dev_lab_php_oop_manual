<?php
class A
{
    function Foo()
    {
        if (isset($this)) {
            echo "\$this está definida (".get_class($this).").<br/>";
        } else {
            echo '$this no está definida.<br/><br/>';
        }
    }
}

class B
{
    function bar()
    {
        A::Foo();
    }
}

$a = new A();
$a->Foo(); //$this está definida (A)
A::Foo(); //$this no está definida.

$b = new B(); 
$b->bar(); //$this está definida (B)
B::bar(); //$this no está definida.

