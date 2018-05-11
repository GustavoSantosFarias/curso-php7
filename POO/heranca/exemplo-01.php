<?php 

 class Documento {

 	private $numero;

 	public function getNumero(){
 		return $this->numero;
 	}

 	public function setNumero($numero){
 		$this->numero = $numero;
 	}

 }

 class CPF extends Documento{

 	public function validar():bool{
 		if (is_string($this->getNumero())) {
 			return TRUE;
 		}else{
 			return FALSE;
 		}
 	}
 }

$doc = new CPF;
$doc->setNumero("041.228.770-67");

echo $doc->getNumero().'</br>';
var_dump($doc->validar());