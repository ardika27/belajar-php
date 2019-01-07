<?php


$massege="res";



$example = function($arg='') use($massege){
	var_dump($arg.''.$massege);
};

$massege ='World';
$example('hello');
