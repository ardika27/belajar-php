<?php
abstract class Mobil {
	protected $status = 0;

        protected $transmission; 

        protected $fuel; 

	public const SHUTDOWN = 0;
	public const START = 1;
	public const RUN   = 2;
	public const STOP  = 3;

	public function start()
	{
		$this->setStatus(self::START);
	}

	public function run(){
           if ($this->getStatus() === self::START) {
	       $this->setStatus(self::RUN);
	   } else {
               throw new Exception('Engine not started yet');
	   }
	}

	public function stop(){
           if ($this->getStatus() === self::RUN) {
	       $this->setStatus(self::STOP);
	   } else {
               throw new Exception('Engine not ran yet');
	   }
	}

	public function shutdown(){
           if ($this->getStatus() === self::START || $this->getStatus() === self::STOP) {
	       $this->setStatus(self::SHUTDOWN);
	   } else {
               throw new Exception('Engine cannot be shutdown');
	   }
	}

	public function setStatus(int $param)
	{
	   $this->status = $param;
	}

	function getStatus() : int
        {
		return $this->status;
	}

	public function flipMirror()
	{
	}
}

class Xenia extends Mobil {

}

class Avanza extends Mobil {

}

class Innova extends Mobil {

}


$xenia = new Xenia;

$xenia->flipMirror()

$xenia->start();
//$xenia->run();
//$xenia->stop();
$xenia->shutdown();
echo $xenia->getStatus(), PHP_EOL;
