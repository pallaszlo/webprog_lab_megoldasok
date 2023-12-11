<?php
$array = array(
    'String' => 'a string',
    'Numeric string 1' => '0',
    'Numeric string 2' => '1234',
    'Numeric string 3' => '1.103',
    'Numeric string 4' => '-0.3',
    'Numeric string 5' => '5e12'
);
$json = json_encode($array , JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);
echo '<pre>';
echo $json;
echo '</pre>';

// An indexed array
$colors = array("Red", "Green", "Blue", "Orange");

echo json_encode($colors, JSON_FORCE_OBJECT);
