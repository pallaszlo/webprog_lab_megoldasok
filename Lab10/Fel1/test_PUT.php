<?php
$data = array(
    'product_name' => 'Laptop',
    'price' => 1500,
    'quantity' => 10,
    'seller' => 'XYZ Traders'
);
//$url = 'http://.../REST1/api/products/3';
$url = 'rest1.test/products.php?product_id=3';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
print_r($response);
