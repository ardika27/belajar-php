<?php

class Irfan
{

 public static $tinggi="165cm";
 public static $warna_kulit="Black";

 public function bisa() {
	
	return
	self::$warna_kulit;
}
}

class Kahirullah extends Irfan
{

 public function bisa4(){
	return parent::$tinggi;
}
}

print Irfan::$tinggi;

$manusia= new Irfan;

print $manusia ->bisa();
