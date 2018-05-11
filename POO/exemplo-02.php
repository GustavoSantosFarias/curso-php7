<?php 

class Carro {
	private $modelo;
	private $ano;
	private $motor;

	public function getModelo(){
		return $this->modelo;
	}

	public function getAno():int{
		return $this->ano;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function exibir(){
		$dados = array(
			"modelo" => $this->getModelo(),
			"ano" => $this->getAno(),
			"motor" => $this->getMotor()
		);

		return $dados;
	}

}


$gol = new Carro;
$gol->setModelo("Gol GT");
$gol->setAno("2016");
$gol->setMotor("1.6");

var_dump($gol->exibir());