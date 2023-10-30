<?php
$a = 20;
$b = 3;

function szum(): int
{
    $szum = $GLOBALS["a"] + $GLOBALS["b"];
    return $szum;
}

echo szum();
//print_r($GLOBALS);
?>

<?php
print"<table border=0>";
foreach ($_SERVER as $key => $val) {
    echo "<tr><td>" . $key . "</td><td>" . $val . "</tr>";
}
print"</table>";
?>
