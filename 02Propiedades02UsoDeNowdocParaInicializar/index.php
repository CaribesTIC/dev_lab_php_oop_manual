<?php
class Foo {
   // A paritr de PHP 5.3.0
   public static $bar = <<<EOT
bar\n
EOT;
   public static $baz = <<<'EOT'
baz
EOT;
}

echo Foo::$bar;
echo Foo::$baz;

