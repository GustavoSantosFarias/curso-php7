<?php 

$file = fopen("log.txt", "a+");
$conteudo = date("d-m-Y H:i:s") . "\r\n";
fwrite($file, $conteudo);

fclose($file);

echo "Log atualizado";