<?php 
// buat class laptop
class laptop {
  
   private $pemilik = "Andi";
   private $merk = "Lenovo";
   
   public function __construct(){
     echo "Ini berasal dari Constructor Laptop";
   }
  
   public function hidupkan_laptop(){
     return "Hidupkan Laptop $this->merk punya $this->pemilik";
  
   }
   public function __destruct(){
     echo "Sekian Dan TerimaKasih".PHP_EOL;
   }
}

class notebook extends laptop {

	function __construct() {
	 parent::__construct();
	 print "ini punya saya ";

}
}

class nih extends laptop {

 function __construct(){
 
 parent::__destruct();
}

}
  
// buat objek dari class laptop (instansiasi)
$laptop_andi= new laptop();
  
echo PHP_EOL;
echo $laptop_andi->hidupkan_laptop();
echo PHP_EOL;

$des= new notebook();
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;



//$dq= new nih();
