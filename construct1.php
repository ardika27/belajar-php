<?php
abstract class Hewan {
	public $tipe;
	public $nama;
	Public $suara;

	public function __construct($aTipe, $aNama , $aSuara){
		$this->tipe = $aTipe;
		$this->nama = $aNama;
		$this->suara = $aSuara;
	}

	public static function compare($a,$b){
		if($a->nama < $b->nama) return -1;
		else if($a->nama == $b->nama) return 0;
		else return 1;
	}

	public function __toString(){
		return "$this->nama the $this->tipe goes $this->suara";
	}
}





class Dog extends Hewan{
  public function __construct($nama){
    parent::__construct("Dog", $nama, "woof!");
  }
}

class Cat extends Hewan{
  public function __construct($nama){
    parent::__construct("Cat", $nama, "meeoow!");
  }
}

class Bird extends Hewan{
  public function __construct($nama){
    parent::__construct("Bird", $nama, "chirp chirp!!");
  }
}


$animals = array(
  new Dog("Fido"),
  new Bird("Celeste"),
  new Cat("Pussy"),
  new Dog("Brad"),
  new Bird("Kiki"),
  new Cat("Abraham"),
  new Dog("Jawbone")
);

# sort $animals with PHP's usort - calls Animal::compare() many many times.
usort($animals, array("Hewan", "compare"));

# print out the sorted results - calls Animal->__toString().
foreach($animals as $animal) echo "$animal\n";

