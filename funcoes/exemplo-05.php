<?php 

$pessoa = array(
	"nome" => "Gustavo",
	"idade" => 19
);

foreach ($pessoa as &$value) {
	if (gettype($value) === "integer") {
		$value += 20;  
		echo $value;
	}
}

print_r($pessoa);