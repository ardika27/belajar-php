<?php
class boy {

	function dik($string,$int){

	echo "makan.$string $int";
}
}

$bar = new boy;
$bar->dik("malam",8);


$data = array("saya","kamu","kami","kita");
$objk = (object)$data;//merubah array menjadi sebuah objeck yang di bungkus dalak variabel $objk

print_r($objk);//mengenluar objek tersebut


$newobjk= new stdClass();//membuat yang baru
$newobjk->nama="boy";
$newobjk->work ="pelajar";
$newobjk->alamat="medanT";


$new = (array)$newobjk;//membuat stdclass menjadi array
print_r($new);//mengeluarkan objek yang baru di echo

 ?>
