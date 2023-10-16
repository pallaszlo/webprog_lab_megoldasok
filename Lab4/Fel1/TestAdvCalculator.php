<?php
namespace Lab4\Fel1;

include "AdvCalculator.php";
include "NonExistentOperation.php";

echo __NAMESPACE__ ."<br>";

$ca = new AdvCalculator(3, 4);
//$ca = new \Lab4\Fel1\AdvCalculator(3, 4);
try {
    echo "<p>3 + 4 = " . $ca->add() . "</p>";
    echo "<p>3 - 4 = " . $ca->subtract() . "</p>";
    echo "<p>3 * 4 = " . $ca->multiply() . "</p>";
    echo "<p>3 / 4 = " . $ca->divide() . "</p>";
    echo "<p>pow( 3, 4 ) = " . $ca->pow() . "</p>";
    echo "<p>sqrt( 3 ) = " . $ca->sqrt() . "</p>";
    echo "<p>exp( 3 ) = " . $ca->exp() . "</p>";
    printf("%.2f", $ca->expp());
} catch (NonExistentOperation $e) {
    //echo $e->getMessage();
    echo $e->errorMessage();
}
