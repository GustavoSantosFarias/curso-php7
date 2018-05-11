<?php 

$conn = new PDO("mysql:host=localhost;dbname=db_php7","root","mysqlserver");
$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = ?");

$id = 3;

$stmt->bindParam(":id",$id);

//O indice do array se refere ao ponto de interrogação na query
$stmt->execute(array($id));

//Volta atrás apos a instrução na query SQL
$conn->rollback();

//Confirma a query SQL
$conn->commit();

echo "Delete ok";