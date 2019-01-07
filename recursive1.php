<?php
 
function faktorial($n=1) {
	$hasil = 1;
	for($i=$n; $i >= 1;$i--) {
		$hasil = $hasil * $i;
	}
	return $hasil;
}
 
echo "5! = ".faktorial(5).PHP_EOL;
echo "9! = ".faktorial(9);
 
?>
