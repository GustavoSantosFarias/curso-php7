<?php 

function incluirClasses($nomeClasse){
	if (file_exists("$nomeClasse.php") === TRUE) {
		require_once("$nomeClasse.php");
	}	
}


spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
	if (file_exists("abstratas".DIRECTORY_SEPARATOR."$nomeClasse.php") === TRUE) {
		require_once("abstratas".DIRECTORY_SEPARATOR."$nomeClasse.php");
	}
});

$carro = new DeLRey;
$carro->acelerar(80);