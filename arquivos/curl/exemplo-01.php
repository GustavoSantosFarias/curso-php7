<?php 

$ch = curl_init("https://viacep.com.br/ws/95612008/json/");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

$response = curl_exec($ch);

curl_close($ch);

echo "<pre>";
print_r(json_decode($response,true));