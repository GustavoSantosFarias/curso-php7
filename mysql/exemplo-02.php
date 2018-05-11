<?php 

$con = new mysqli("localhost","root","mysqlserver","db_php7");

if ($con->connect_error) {
	echo "Error".$con->conect_error;
	exit;
}

$result = $con->query("SELECT *FROM tb_usuarios");
$data = array();
while ($row = $result->fetch_assoc()) {
	array_push($data, $row);
}

echo "<pre>";
print_r(json_encode($data));