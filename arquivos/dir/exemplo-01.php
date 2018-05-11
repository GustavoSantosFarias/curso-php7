<?php 
$name = "images";

if (!is_dir($name)) {
	mkdir($name);
	echo "diretório $name criado!";
}else{
	echo "este diretório já existe";
}