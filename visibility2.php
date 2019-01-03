<?php

class foo
{
  private $des="Private";
  protected $pro="Protecred";
  public $pub="GLOBAL";

	 function dess()
{
 echo $this->des.PHP_EOL;
 echo $this->pro.PHP_EOL;
 echo $this->pub.PHP_EOL;
}
}

$des=new foo();


echo $des->pro;

echo $des-> dess();
