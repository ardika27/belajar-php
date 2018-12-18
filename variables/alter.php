<?php
$foo = 'Bob';              // Assign the value 'Bob' to $foo
unset($foo);
$bar = &$foo;              // Reference $foo via $bar.
$bar = "My name is $bar";  // Alter $bar...
echo $bar.PHP_EOL;
echo $foo;                 // $foo is altered too.
?>

