<?php


function boy ($a)
{

	if($a <20) 
	 {
	   echo "$a\n";
	  boy($a+1);
	 }	

}

boy($a=4);
 ?>
