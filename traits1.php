<?php
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
	    echo 'Hello Universe!'.PHP_EOL;
	    for($i = 1;$i > -1;$i++){
		    echo $i;
	    }
    }
$o = new TheWorldIsNotEnough();
$o->sayHello();
?>
