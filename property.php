<?php 

 class foo
{
  public  static $static="BestFriend";
  
  public function boy()
	{
	return  self::$static;//artunya penggunakan kunci :: adalah property yang static bukan non static kalau nonstatic harus menggunakan tanda panah
	}	
}
 class fooo extends foo 
{
  public function des()
	{
	 return parent::$static;
	}
}

echo foo::$static. PHP_EOL;

$dir= new foo();

echo $dir->boy(). PHP_EOL;//contoh pemanggilan non static menggunkan tanda panah
echo $dir::$static;
