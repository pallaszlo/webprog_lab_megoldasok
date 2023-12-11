<?php

$data = array(
    'product_name' => 'Porszivo',
    'price' => 500,
    'quantity' => 10,
    'seller' => 'XYZ Traders'
);
//$url = 'http://.../REST1/api/products';
$url = 'rest1.test/products.php';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
print_r($response);
