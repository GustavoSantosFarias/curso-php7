<?php 

function ola(){
	$argumentos = func_get_args();
	var_dump($argumentos);
}

ola("bom dia",20);