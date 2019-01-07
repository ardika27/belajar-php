<?php

$a=1;
$b=2;

function sum(){

$GLOBALS['b'] = $GLOBALS['a']+ $GLOBALS['b'];

}

//static
function test4(){

static $a =0;
static $a;
$a++;
echo $a;
}

//penggunaan variable scope rekursif penggunakan fungsi yang memanggil dirinya sendiri

function test(){

static $count =0;


$count ++;
echo $count;

if ($count < 10){
	test();


}
$count --;
}

function test_global(){
	global $obj;
	$obj = &new stdclass;
}
function test_global_no(){
	global $obj;
	$obj = new stdclass;
	
}





 sum();
 echo $b;

test_global();
var_dump($obj);
test_global_no();
var_dump($obj);
 ?>

