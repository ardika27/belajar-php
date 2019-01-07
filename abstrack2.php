<?php 


abstract class panggilan
{
	abstract protected function saya($nama);

}

class boy extends panggilan {

 public function saya ($nama, $titik="."){

 if($nama== "Wanita"){
	$sebutan="Nyonya";
}
 elseif($nama== "Boy"){
	$sebutan="tuan";
}
else{
	$sebutan="";
}

return "{$sebutan}{$titik}{$nama}";
}
}


$adi = new boy();

echo $adi->saya("Boy").PHP_EOL;
echo $adi -> saya("Wanita");

