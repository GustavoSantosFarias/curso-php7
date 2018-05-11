<?php 

$conn = new PDO("mysql:host=localhost;dbname=db_php7","root","mysqlserver");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (:login,:senha)");

$login = "gustavofarias";
$senha = "@#fafa";

$stmt->bindParam(":login",$login);
$stmt->bindParam(":senha",$senha);
$stmt->execute();

echo "inserido ok";