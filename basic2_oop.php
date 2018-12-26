<?php 

 class foo 
{

	public $des="BOYHENDRAWAN";
	public function bar() {
		
		return "$this->des,method";
	}
}

$obj = new foo();//penggunakan variabel baru menggunakan "new";

echo  $obj->bar();

