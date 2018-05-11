<?php  

interface Veiculo{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo{

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

$carro = new Civic;
$carro->acelerar(44);
$carro->frenar(60);
$carro->trocarMarcha(3);