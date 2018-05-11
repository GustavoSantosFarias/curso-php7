<?php 

$conn = new PDO("mysql:host=localhost;dbname=db_php7","root","mysqlserver");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :login, dessenha = :senha WHERE id = :id");

$login = "santosfarias";
$senha = "12647";
$id = 1;


$stmt->bindParam(":login",$login);
$stmt->bindParam(":senha",$senha);
$stmt->bindParam(":id",$id);
$stmt->execute();

echo "inserido ok";