<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sqlserver","sqlserver");
$stmt = $conn->prepare("SELECT *FROM tb_usuarios");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($results);