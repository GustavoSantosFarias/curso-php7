<?php 

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($logradouro,$numero,$cidade){
		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cidade = $cidade;
	}

	public function __destruct(){
		echo "Objeto Destruido";
	}

	public function __toString(){
		return $this->logradouro."-".$this->numero."|".$this->cidade;
	}

}

$meuEndereco = new Endereco("Carlos Kroeff","2039","Taquara");
echo $meuEndereco.'</br>';

