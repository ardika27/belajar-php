<?php
abstract class Mobil {
	protected $status;
	public const SHUTDOWN = 0;
	public const START = 1;
	public const RUN   = 2;
	public const STOP  = 3;

	public function start()
	{
<<<<<<< HEAD
		$this->setStatus(self::START);
=======
 	   $this->setStatus(self::START);
>>>>>>> 71d1511d398ae73b54db6f920b78d5aa1ab04ddb
	}

	public function run(){
	   $this->setStatus(self::RUN);
	}

	public function stop(){
	   $this->setStatus(self::STOP);
	}

	public function shutdown(){
           $this->setStatus(self::SHUTDOWN);
	}

	public function setStatus(int $param)
	{
	   $this->status = $param;
	}

	function getStatus() : int
        {
		return $this->status;
        }
}

class Xenia extends Mobil {

}

$class = new Xenia;
$class->start();
echo $class->getStatus(), PHP_EOL;
<<<<<<< HEAD
$class->run();
echo $class->getStatus(), PHP_EOL;
$class->shutdown();
echo $class->getStatus(), PHP_EOL;
$class->stop();
echo $class->getStatus(), PHP_EOL;
$class->shutdown();
echo $class->getStatus(), PHP_EOL;
=======
>>>>>>> 71d1511d398ae73b54db6f920b78d5aa1ab04ddb
