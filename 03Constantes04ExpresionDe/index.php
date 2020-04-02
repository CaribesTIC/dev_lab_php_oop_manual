<?php
const UNO = 1;

class Foo {
    // A partir de PHP 5.6.0
    const DOS = UNO * 2;
    const TRES = UNO + self::DOS;
    const SENTENCIA = 'El valor de TRES es '.self::TRES;
}

echo UNO;
echo Foo::DOS;
echo Foo::TRES;
echo Foo::SENTENCIA;
