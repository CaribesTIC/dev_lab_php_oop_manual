<?php
namespace Foo;
class Bar
{
    public function Bar()    // Tratado como constructor en PHP 5.3.0 - 5.3.2
    {                        // Tratado como método regular a partir de PHP 5.3.3
       echo __METHOD__;
    }
}
Bar::Bar();

