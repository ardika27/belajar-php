<?php 
$angka = 0;
while ($angka < 100 ) {
	$angka++;
    if ($angka % 2 == 0) { 
        continue;
    }
    echo $angka.PHP_EOL;
}

