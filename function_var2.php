<?php

class foo {

	static function bur()
	{
		echo"Tomson\n";
	}
	function baz()
	{
		echo"bar\n";
	}
	function __construct()
	{
		echo"nilai";
	}
}

$func="foo::bur";//artinya kita memanggil di class foo yang mentod nya bur
$func();//memanggul yg di atas nya
$func=array(new foo, "baz");
$func();
$func= "foo::baz";
$func();

