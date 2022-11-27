<?php

$data = array(
    'product_name' => 'Nyomtato',
    'price' => 500,
    'quantity' => 10,
    'seller' => 'XYZ Traders'
);
$url = 'http://localhost:7777/ITTaborSzovata/REST2/api/products';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
