<?php
class Foo {
    // A partir de PHP 5.3.0
    const BAR = <<<EOT
bar\n
EOT;
    // A partir de PHP 5.3.0
    const BAZ = <<<'EOT'
baz
EOT;
}

echo Foo::BAR;
echo Foo::BAZ;

