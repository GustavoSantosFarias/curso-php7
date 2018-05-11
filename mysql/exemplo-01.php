<?php 

$con = new mysqli("localhost","root","mysqlserver","db_php7");

if ($con->connect_error) {
	echo "Error".$con->conect_error;
	exit;
}

$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(?,?)");
$login = "user";
$senha = "234235";
$stmt->bind_param("ss",$login, $senha);
$stmt->execute();