<?php
$file = fopen('resource.txt', 'r');
while (!feof($file)) {
	var_dump(fread($file,1));
	echo PHP_EOL;
}
fclose($file);
