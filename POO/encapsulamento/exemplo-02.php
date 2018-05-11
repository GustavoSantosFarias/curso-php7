<?php  

class Pessoa{

	public $nome = "Gustavo";
	protected $idade = 19;
	private $nascionalidade = "Brasileiro";

	public function mostraDados(){
		echo get_class($this);

		echo $this->nome."</br>";
		echo $this->idade."</br>";
		echo $this->nascionalidade."</br>";
	}

}

class Programador extends Pessoa{
	public function mostraDados(){
		echo get_class($this)."</br>";

		echo $this->nome."</br>";
		echo $this->idade."</br>";
		echo $this->nascionalidade."</br>";
	}
}

$eu = new Programador;

//Acessando atributo publico
echo $eu->nome."</br>";
//Acessando atributos privados 
$eu->mostraDados();