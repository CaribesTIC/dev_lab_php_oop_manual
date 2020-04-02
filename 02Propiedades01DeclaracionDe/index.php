<?php
class ClaseSencilla
{
    //Válido a partir de PHP 5.6.0:
    public $var1 = 'hola ' . 'mundo';
    
    //Válido a partir de PHP 5.3.0
    public $var2 =  <<<EOD
hola mundo
EOD;
    //Válido a partir de PHP 5.6.0
    public $var3 = 1+2;
    // Declaraciones de propiedades inválidas:
    //public $var4 = self::miMetodoEstatico();
    //public $var5 = $myVar;

    // Declaraciones de propiedades válidas:
    const  miConstante = 1;
    public $var6 = self::miConstante;
    public $var7 = array(true, false);

    public $var8 = <<<'EOD'
hola mundo
EOD;

    function imprime()
    {
        echo $this->var1.'<br/>';
        echo $this->var2.'<br/>';
        echo $this->var3.'<br/>';
        echo $this->var6.'<br/>';
        var_dump($this->var7);
        echo $this->var8;
    }

}

$obj = new ClaseSencilla();
$obj->imprime();
