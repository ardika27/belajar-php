<?php
$file = fopen('boy.txt', 'r');

while(!feof($file)){
	var_dump(fread($file, 5));
	echo PHP_EOL;	
}
fclose($file);
 ?>
