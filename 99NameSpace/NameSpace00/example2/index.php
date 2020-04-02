<?php
require_once 'anexsoft/helpers/Hello.php';
use function Anexsoft\Helpers\sayHelloTo;
echo sayHelloTo();

use const Anexsoft\Helpers\user;
echo user;

/*
Como invocar varios espacios de nombre

Si bien podemos hacer uso de varios "USE" lo que me gusta hacer a mi es separarlo con ",".

use Anexsoft\Core\Database,
    Anexsoft\Core\Http,
    Anexsoft\Core\Exceptions,
    Anexsoft\Core\Helpers,
    Anexsoft\Core\Crypt;

En PHP 7 si estamos trabajando con el mismo espacio de nombre podemos separarlo por llaves.

use Anexsoft\Core\{Database, Http, Exceptions, Helpers, Crypt};
*/
