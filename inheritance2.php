<?php

class hp 
{

 public $merk, $tipe;
 const lebar="9";

 public function __construct($merk="Xiaomi",$tipe="RedmiS2") {
	
$this->merk=$merk;
 $this->tipe=$tipe;
}
 public function getlabels() {
 echo "Nama Hp=$this->merk|$this->tipe";
}
}

class samsung extends hp 
{
 const camera="4camera";

 public function spek_hp2($merk="samsung",$tipe="J6plus",$lebar="7",$camera="4Camera") {
	$this->merk=$merk;
	$this->tipe=$tipe;
	echo parent::lebar;
	echo self::camera;


}
}

$hp=new hp(); 

$hp -> getlabels();
