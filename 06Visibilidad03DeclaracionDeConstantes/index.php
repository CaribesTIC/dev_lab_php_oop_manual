<?php
/**
 * Definir MiClase
 */
class MiClase
{
    public const MY_PUBLIC = "public\n";

    protected const MY_PROTECTED = "protected\n";

    private const MY_PRIVATE = "private\n";

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}

echo MiClase::MY_PUBLIC; // Muestra public
//echo MiClase::MY_PROTECTED; // Error fatal
//echo MiClase::MY_PRIVATE; // Error fatal
$myclass = new MiClase();
$myclass->foo(); // Muestra Public Protected Private


class MiClase2 extends MiClase
{
    
    function foo2() // Esta es pública
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
       // echo self::MY_PRIVATE; // Error fatal
    }
}

echo MiClase2::MY_PUBLIC; // Muestra public

$myclass2 = new MiClase2;
$myclass2->foo2(); // Muestra Public Protected 

