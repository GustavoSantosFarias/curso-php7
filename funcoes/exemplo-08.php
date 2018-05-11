<?php  

$hierarquia = array(
	array(
		"nome_cargo" => "CEO",
		"subordinados" => array(
			//Inicio: diretor comercial
			"nome_cargo" => "Diretor comercial",
			"subordinados" => array(
				//Inicio: Gerente de vendas
				"nome_cargo" => "Gerente de vendas"
				//Termino: Gerente de vedas
			)
			//Termino: diretor comercial
		),
		
		array(
			//Inicio: Diretor financeiro
			"nome_cargo" => "Diretor financeiro",
			"subordinados" => array(
				//Inicio: Gerente
				"nome_cargo" => "Gerente"
				//Termino: Gerente
			)
			//Termino: Diretor financeiro
		)
		
	)
);


function exibe($cargos){
	$html = "<ul>";

	foreach ($cargos as $cargo) {
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			$html .= exibe($cargo['subordinados']);	
		}
		$html .= "</li>";
	}

	$html .= "</ul>";

	return $html;
}

echo exibe($hierarquia);