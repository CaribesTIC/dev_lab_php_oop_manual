<?php
require_once 'anexsoft/helpers/Hello.php';

/*hay 2 formas de hacerlo.
La primera es hacer uso de la palabra reserva use
Esta forma es recomendada si vamos hacer uso de la clase Hello varias veces.
*/
use Anexsoft\Helpers\Hello;

echo Hello::sayHello();


/*La segunda forma es llamarlo directamente
En este ejemplo el Namespace será llamado una sola vez por lo tanto no hace falta hacer el Use, 
si vamos a usar más cosas que contiene el namspace entonces mejor es hacer uso del use.
*/

echo '<br/>';
echo Anexsoft\Helpers\Hello::sayHello();
