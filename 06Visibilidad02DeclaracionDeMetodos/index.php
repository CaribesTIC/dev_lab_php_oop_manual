<?php
class MyClass
{
    public function __construct() { echo __METHOD__."<br/>"; }

    public function MyPublic() { echo __METHOD__."<br/>"; }

    protected function MyProtected() { echo __METHOD__."<br/>"; }

    private function MyPrivate() { echo __METHOD__."<br/>"; }
    
    public function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

class MyClass2 extends MyClass
{
    
    function Foo2() // Esto es public
    {
        $this->MyPublic();
        $this->MyProtected();
        //$this->MyPrivate(); // Error Fatal
    }
}

$myclass2 = new MyClass2;
$myclass2->MyPublic();         // Muestra MyClass::__construct MyClass::MyPublic
//$myclass->MyProtected();     // Error Fatal
//$myclass->MyPrivate();       // Error Fatal
$myclass2->Foo();              // Muestra MyClass::MyPublic MyClass::MyProtected MyClass::MyPrivate
$myclass2->Foo2();             // Muestra MyClass::MyPublic MyClass::MyProtected


class Bar
{
    public function test() {
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic() {
        echo "Bar::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Bar::testPrivate\n";
    }
}

class Foo extends Bar
{
    public function testPublic() {
        echo "Foo::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Foo::testPrivate\n";
    }
}

$myFoo = new Foo();
$myFoo->test(); // Bar::testPrivate Foo::testPublic

