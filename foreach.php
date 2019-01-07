<<<<<<< HEAD
<?php

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
	$value = $value * 2;
	print_r($value);
=======
<?php 

foreach(array(1,2,3,4) as $value)
{
	$value =$value* 2;
	echo $value;
>>>>>>> c225f8e42e606fce21a9a7849c87aefdff4f3960
}
