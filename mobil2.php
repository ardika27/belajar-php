<?php
interface Mobil {
	public function start();
	public function run();
	public function stop();
	public function shutdown();
	public function getStatus();
}

class Avanza implements Mobil {
	public function start(){
		//hidup
	}
	public function run(){
                //jalan
        }
	public function stop(){
                //berhenti
	}
	public function shutdown(){
                //off
	}
	public function getStatus(){
                //status
        }
}

$hasil = new 


