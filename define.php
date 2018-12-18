<?php
function aku_mau(){


echo "nama fungtion akan di cetak". __FUNCTION__;
}

function double($i)
{
	return $i*2;
}
$b = $a =5 ;
$c = $a++;

$e= $d = ++$b;//artinya  5+1


$f= double($d++);
$g = double(++$e);

	


define('Books',"Buku adaalah semua buah jendela dunia",true);

echo books;// disini jika kondisi ketiga flase atau tidak di isi maka automatis nama dari define case sensitive  dan jika kondisi ketiga  itu disi true maka pemanggilan tidak harus sama  atau tidak case sensitve



echo "alamat".__DIR__;

aku_mau();
?>


