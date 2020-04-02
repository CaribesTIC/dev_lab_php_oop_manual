<?php
class Foo { // A partir de PHP 7.1.0
    
    private const BAR = 'bar';
    public const BAZ = 'baz';

    public function getBar()
    {
        return self::BAR. PHP_EOL;
    }
   
}

echo Foo::getBar();
echo Foo::BAZ, PHP_EOL;

