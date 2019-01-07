<?php
$value = 'Big Bos';
setcookie("testCookie",$value); //(nama_untuk di panggil, "value atau isi', jangka waktu);

setcookie("TestCookie",$value,time()+60); //1 jam
setcookie("test",$value, time()+60, "/`rasmus/","example.com",1);
 ?>

