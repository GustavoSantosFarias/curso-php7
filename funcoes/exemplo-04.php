<?php 

$a = 10;

//Parâmetro com referencia de variavel
function trocaValor(&$a){
	$a = 20;
	return $a;
}
echo $a."</br>";
echo trocaValor($a)."<br>";
echo $a;