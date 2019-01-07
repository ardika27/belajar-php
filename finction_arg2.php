<?php

function boy (...$minuman)
{	
	$s= 0;
	foreach($minuman as $n){
	$s += $n;
	}
	return $s;
}
function add($a,$b){
	return  $a* $b;
}


echo boy(1,2,3,4,30);
echo"". PHP_EOL;
$a=[4, 5];
echo add(...$a);
 ?>
