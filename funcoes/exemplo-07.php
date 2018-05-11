<?php 

function soma(int ...$valores):string{
	return array_sum($valores);
}

var_dump(soma(50,50));
echo "</br>".soma(2,2)."</br>";
echo soma(2,20)."</br>";