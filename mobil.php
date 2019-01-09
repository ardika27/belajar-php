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
               throw new Exception('Engine not run yet');
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
   


   public function trans($transmission="Matic")
  {
  	echo "transmission $this->transmission=$transmission".PHP_EOL;
  	
  }
  public function bahanbakar($fuel="Pertamax")
  {
  	echo "Bahan Bakar $this->fuel=$fuel".PHP_EOL;
  }
}


class Avanza extends Mobil {

	public function trans($transmission="Manual")
  {
  	echo "transmission $this->transmission=$transmission".PHP_EOL;
  	
  }
  public function bahanbakar($fuel="Pertalite")
  {
  	echo "Bahan Bakar $this->fuel=$fuel".PHP_EOL;
  }
}

class Innova extends Mobil {

	public function trans($transmission="Manual")
  {
  	echo "transmission $this->transmission=$transmission".PHP_EOL;
  	
  }
  public function bahanbakar($fuel="Dextalite")
  {
  	echo "Bahan Bakar $this->fuel=$fuel".PHP_EOL;
  }
  public function flipMirror(){}

}


$xenia = new Xenia;

//$xenia->flipMirror();

$xenia->start();
$xenia->trans();
$xenia->flipMirror();

echo $xenia->getStatus(), PHP_EOL;
