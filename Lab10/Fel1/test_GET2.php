<?php
$url = "http://.../REST1/api/products/2";
$url = 'rest1.test/products.php?product_id=2';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);
print_r($response);
