<?php
//https://www.codewall.co.uk/laravel-guzzle-tutorial-with-get-post-examples/
require '../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://reqres.in/']);

$response = $client->request('POST', '/api/users', ['form_params' => [
    'name' => 'Dan',
    'job' => 'Full Stack Dev'
]]);

echo $response->getBody();
