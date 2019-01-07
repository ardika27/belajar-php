<?php


class foo
{
  const boy ="Ini saya";
  const SEC_PER_DAY=60*60*24;
   function des()
 {
	echo self::boy.PHP_EOL;
 }
}
echo foo::boy.PHP_EOL;
$classname="myClass";

echo foo::SEC_PER_DAY.PHP_EOL;

$des = new foo();

echo $des::boy.PHP_EOL;

$great="fantastic";

echo "This is {$great}";
