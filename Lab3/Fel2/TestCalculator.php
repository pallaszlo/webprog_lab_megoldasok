<?php
namespace Fel2;

include "Calculator.php";

$calc = new Calculator(3, 4);
echo "<p>3 + 4 = " . $calc->add() . "</p>";
echo "<p> $calc->val1 + $calc->val2 = " . $calc->add() . "</p>";
echo "<p>3 - 4 = " . $calc->subtract() . "</p>";
echo "<p>3 * 4 = " . $calc->multiply() . "</p>";
echo "<p>3 / 4 = " . $calc->divide() . "</p>";
echo $calc->val1;
