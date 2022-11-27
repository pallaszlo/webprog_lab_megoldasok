<?php

$url = 'https://fakestoreapi.com/products';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
print_r($response_json);
//print_r($response);

$products = $response;

echo "<table border='1px'>";
foreach ($products as $product) {
    echo "<tr>";
    echo "<td>";
    echo $product["id"];
    echo "</td>";
    echo "<td>";
    echo $product["title"];
    echo "</td>";
    echo "<td>";
    echo $product["price"];
    echo "</td>";
    echo "<td>";
    echo $product["category"];
    echo "</td>";
    echo "<td>";
    $src = $product["image"];
    echo "<img src='$src' height='50px'>";
    echo "</td>";


    /*
    foreach ($product as $key => $value){
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    */
    echo "</tr>";
}
echo "</table>";

