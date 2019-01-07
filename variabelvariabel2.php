<?php
$saya= "Mau tidur dong";
$kamu= "saya";

echo $$kamu;//disni yang di keluarkan yang didalam $kamu nah mkasundya $kamu[$saya]


class foo {

	var $bar ='i am bar.';
	var $arr= array('i am A.','i am B', 'i am C');
	var $r= 'I am r.';
}

$foo = new foo();
$bar ='bar';
$baz= array('foo','bar','baz','quuz');
echo $foo->$bar. "\n";
echo $foo->{$baz[1]}. "\n";

$start= "b";
$end ="ar";
echo $foo-> {$start . $end}. "\n";
 ?>
