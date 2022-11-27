<?php
require '../vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://reqres.in/api/users/1');

//echo $response->getStatusCode();
//echo $response->getHeaderLine('content-type');
echo $response->getBody();
