<?php


abstract class mobil {

 protected $Status;
 public const Shutdwon =0;
 public const Start= 1;
 public const Run=2;
 public const Stop=3;


 public function start() {
 $this->SetStatus(self::Start);
}
 public function run() {
 $this->SetStatus(self::Run);
 }

 public function stop() {
 $this->SetStatus(self::Stop);
}
 public function SetStatus(int $param){
 $this->Status=$param;
}

 function GetStatus(): int {

 return $this->Status;
} 
}
class Jazz extends mobil {

}


$Jazz = new Jazz;

$Jazz->start();
echo $Jazz->GetStatus().PHP_EOL;
$Jazz->stop();
echo $Jazz->GetStatus().PHP_EOL;
