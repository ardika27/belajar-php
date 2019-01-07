<?php 

$satu = function($a) 
{
	return $a * 2;
};


$nomor = range(3, 6);

$new_numbers=array_map($satu, $nomor);

print implode(' ',$new_numbers);
?>
