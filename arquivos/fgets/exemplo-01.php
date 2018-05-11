<?php

$file_name = "teste.csv";

if (file_exists($file_name)) {
	$file = fopen($file_name, "r");
	$headers = explode(",", fgets($file));
	$data = array();

	while ($row = fgets($file)) {
		
		$values = explode(",", $row);
		$linha = array();

		for($i = 0; $i < count($headers); $i++){
			$linha[$headers[$i]] = $values[$i];
		}

		array_push($data, $linha);
	}

	echo "<pre>";
	print_r($data);
	
	fclose($file);
	
}