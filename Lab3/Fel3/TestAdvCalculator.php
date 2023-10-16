<?php
namespace Fel3;
include "AdvCalculator.php";

$ca = new CalcAdvanced(3, 4);
try {
    echo "<p>3 + 4 = " . $ca->add() . "</p>";
    echo "<p>3 - 4 = " . $ca->subtract() . "</p>";
    echo "<p>3 * 4 = " . $ca->multiply() . "</p>";
    echo "<p>3 / 4 = " . $ca->divide() . "</p>";
    echo "<p>pow( 3, 4 ) = " . $ca->pow() . "</p>";
    echo "<p>sqrt( 3 ) = " . $ca->sqrt() . "</p>";
    echo "<p>exp( 3 ) = " . $ca->exp() . "</p>";
} catch (Exception $e) {
    echo $e->getMessage();
}
