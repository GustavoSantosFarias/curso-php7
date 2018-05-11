<?php 

$conn = new PDO("mysql:dbname=db_php7;host=localhost","root","mysqlserver");
$stmt = $conn->prepare("SELECT *FROM tb_usuarios");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($results);