<?php
class Test
{
    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    private function bar()
    {
        echo 'Método private accedido.';
    }

    public function baz(Test $other)
    {
        // Se puede cambiar la propiedad private:
        $other->foo = 'hola';
        var_dump($other->foo);

        // También se puede invocar al método private:
        $other->bar();
    }
}

$test = new Test('test');

$test->baz(new Test('other'));
