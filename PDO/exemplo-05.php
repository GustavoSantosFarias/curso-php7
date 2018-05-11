<?php 

$conn = new PDO("mysql:host=localhost;dbname=db_php7","root","mysqlserver");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = :id");

$id = 1;

$stmt->bindParam(":id",$id);
$stmt->execute();

echo "Delete ok";