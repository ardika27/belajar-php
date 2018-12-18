<?php 
	$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";
$a[1][2] = "d";
foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b)) {
 	   // $a contains the first element of the nested array,
	   // and $b contains the second element.
	unset($a,$b);
    echo "A: $a; B: $b\n";
}
