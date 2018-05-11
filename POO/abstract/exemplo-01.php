<?php 


abstract class Automovel{
	public function acelerar($velocidade){
		echo "Você acelerou até ".$velocidade."km/h</br>";
	}

	public function frenar($velocidade){
		echo "Você frenou quando estava a ".$velocidade."km/h</br>";
	}

	public function trocarMarcha($marcha){
		echo "Você está na ".$marcha."ª marcha</br>";
	}
}

class Veloster extends Automovel{
	public function motor(){

	}
}

$carro = new Veloster;

$carro->acelerar(130);