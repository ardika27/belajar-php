<?php
class Foo {
    // As of PHP 7.1.0
    public const BAR = 'bar';
    public const BAZ = 'baz';
}
echo Foo::BAR.PHP_EOL;
echo Foo::BAZ.PHP_EOL;

class MyTimer {
    const SEC_PER_DAY = 60 * 60 * 24;
}
?>
