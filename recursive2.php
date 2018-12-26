<?php 
function num($num)
{
 echo $num.PHP_EOL;//memanggil diri sendiri yang hanya menggunakan mekanis if  di fucntion
	
 if($num < 50)
   {
   return num($num +1);
}
}
$ds=1;
echo num($ds);
