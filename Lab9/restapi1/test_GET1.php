<?php

//$url = 'http://localhost:7777/ITTaborSzovata/REST2/api/products';
$url = 'rest1.test/products';
//$url = "http://localhost:63342/WebProg_Laborok/E7/REST1/products";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);
print_r($response);
