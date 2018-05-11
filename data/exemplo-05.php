<?php 

$data = new DateTime();

//P de perido e D de dias
$periodo = new DateInterval("P15D");
echo $data->format("d/m/Y H:i:s")."</br>";
$data->add($periodo);
echo $data->format("d/m/Y H:i:s");