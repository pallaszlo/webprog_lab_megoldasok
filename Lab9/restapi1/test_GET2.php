<?php
//$url = 'http://localhost:7777/ITTaborSzovata/REST2/api/products/2';
$url = "http://localhost:63342/WebProg_Laborok/E7/REST1/products/2";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);
