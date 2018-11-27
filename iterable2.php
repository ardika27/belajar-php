<?php
//iterable itu merupakan suatu class yang dapat menanpung suatu array atau value yang di implentasi kan menggunakan foreach 


$data=array("laptop","buku","tas");//merupakan array yang akan di implentasikan ke foreach
var_dump($data);

foreach($data as $peralatan)//melakukan implenatasi dari $data menjadi peralatan`Q`
{
 echo "Ini ada hasil Foreach " . PHP_EOL . $peralatan . PHP_EOL;


}
 ?>
