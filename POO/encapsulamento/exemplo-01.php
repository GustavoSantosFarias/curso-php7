<?php  

class Pessoa{

	public $nome = "Gustavo";
	protected $idade = 19;
	private $nascionalidade = "Brasileiro";

	public function mostraDados(){
		echo $this->nome."</br>";
		echo $this->idade."</br>";
		echo $this->nascionalidade."</br>";
	}

}


$eu = new Pessoa;

//Acessando atributo publico
echo $eu->nome."</br>";
//Acessando atributos privados 
$eu->mostraDados();