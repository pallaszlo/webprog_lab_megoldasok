<!--
********************************************
****** 1.LABORGYAKORLAT SEGÉDLET ***********
********************************************
-->

<!--------------- PHP beállítások megjelenítése ------------>
<?php
//phpinfo();
?>

<!--------------- Kiíratások ------------------------------->
<?php
/**
 * Definition and Usage:
 *    There are two basic ways to get output: echo and print.
 *
 *
 * Statements:
 *    1. The echo statement can be used with or without parentheses: echo or echo()
 *    2. The print statement can be used with or without parentheses: print or print()
 *    3. The printf() function outputs a formatted string.
 *    4. The print_r() function prints the information about a variable in a more human-readable way.
 *    5. The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s).
 *
 * Additional:
 *    1. The gettype() function returns the type of a variable.
 *
 */

echo "Hello World";
echo "<p>PHP is Fun!</p>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
print("I'm about to learn PHP!<br>");
?>

<!---------------- MEGJEGYZÉSEK ----------------------------->
<?php
// Egysoros megjegyzés

# Ez is egysoros megjegyzés

/* Többsoros
    megjegyzés
*/

/**
 * Ez egy
 * dokumentációs
 * megjegyzés
 */
?>

<!------------------ VÁLTOZÓK ---------------------------------->
<?php
/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

// Declare variables
$name = "Joe";
$age = 28;
$isMale = true; // Change into false
$height = 1.85;
$salary = null;
$fruits = ['apple', 'banana', 'mango']; //array

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
var_dump(isset($name));
var_dump(isset($name2));
echo '<br>';
?>

<!--------------------------- KONSTANSOK -------------------------->
<?php
/**
 * Definition and Usage:
 *  Constants are like variables except that once they
 * are defined they cannot be changed or undefined.
 *
 *
 * Syntax:
 *    define(name, value, case-insensitive)
 *
 */

const APP = 'PHP Application';
echo APP;

define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);

define('PI', 3.14);
echo PI . '<br>';

$fruits = ['apple', 'banana', 'mango'];
define('FRUITS', $fruits);
print_r(FRUITS);

// PHP built-in constants
// PHP_EOL

// const vs define

?>

<!------------------------ TÍPUSKÉNYSZERÍTÉSEK(settype) --------------->
<?php
$undecided = 3.14;
print gettype($undecided); // double
print " -- $undecided<br />";  // 3.14
settype($undecided, 'string');
print gettype($undecided); // string
print " -- $undecided<br />";  // 3.14
settype($undecided, 'integer');
print gettype($undecided); // integer
print " -- $undecided<br />";  // 3
settype($undecided, 'double');
print gettype($undecided); // double
print " -- $undecided<br />";  // 3.0
settype($undecided, 'boolean');
print gettype($undecided); // boolean
print " -- $undecided<br />";  // 1
?>

<?php
$undecided = 3.14;
$holder = ( double )$undecided;
print gettype($holder); // double
print " -- $holder<br />";   // 3.14
$holder = ( string )$undecided;
print gettype($holder);  // string
print " -- $holder<br />";   // 3.14
$holder = ( int )$undecided;
print gettype($holder);  // integer
print " -- $holder<br />";   // 3
$holder = ( double )$undecided;
print gettype($holder);  // double
print " -- $holder<br />";   // 3.14
$holder = ( bool )$undecided;
print gettype($holder);  // boolean
print " -- $holder<br />";   // 1
?>

<!------------------ VÁLTOZÓ BEHELYETTESÍTÉS: PHP Variable Interpolation ------------------>
<?php
/**
 * Variable interpolation is adding a variable inside a string in PHP.
 * The main thing to note is, PHP interpolation works only in double-quoted strings and the heredoc syntax.
 * There is another way of doing this with The complex (curly) syntax format, which requires your variable to wrap in curly braces {}.
 */

$name = 'Joel';

// $name will be replaced with `Joel`
echo "<p>Hello $name, Nice to see you.</p>"; //---> Hello Joel, Nice to see you.

// Single Quotes: outputs $name as the raw text (without interpreting it)
echo 'Hello $name, Nice to see you.'; //---> Hello $name, Nice to see you.

// Example using the curly brace syntax for the variable $name
echo "<p>We need more {$name}s to help us!</p>"; //---> We need more Joels to help us!
//The {} syntax only interpolates variables starting with a $ into a string
?>

<!-------------------- OPERÁTOROK ------------------------------------->
<?php
/**
 * Definition and Usage:
 *    Operators are used to perform operations on variables and values.
 *
 * Operator Types:
 *    1. Arithmetic operators
 *    2. Assignment operators
 *    3. Comparison operators
 *    4. Increment/Decrement operators
 *    5. Logical operators
 *    6. String operators
 *    8. Conditional assignment operators
 *
 */

// 1: Arithmetic operators
$x = 10;
$y = 4;
echo ($x + $y) . "<br>"; // 0utputs: 14
echo ($x - $y) . "<br>"; // 0utputs: 6
echo ($x * $y) . "<br>"; // 0utputs: 40
echo ($x / $y) . "<br>"; // 0utputs: 2.5
echo ($x % $y) . "<br>"; // 0utputs: 2

// 2. Assignment operators
$x = 10;
echo $x . "<br>"; // Outputs: 10

$x = 20;
$x += 30;
echo $x . "<br>"; // Outputs: 50

$x = 50;
$x -= 20;
echo $x . "<br>"; // Outputs: 30

// 3. Comparison operators
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z);  // Outputs: boolean true
echo "<br>";
var_dump($x === $z); // Outputs: boolean false
echo "<br>";
var_dump($x != $y);  // Outputs: boolean true
echo "<br>";
var_dump($x !== $z); // Outputs: boolean true
echo "<br>";
var_dump($x < $y);   // Outputs: boolean true
echo "<br>";
var_dump($x > $y);   // Outputs: boolean false
echo "<br>";
var_dump($x <= $y);  // Outputs: boolean true
echo "<br>";
var_dump($x >= $y);  // Outputs: boolean false
echo "<br>";

//4. Increment/Decrement operators
$x = 10;
echo ++$x . "<br>"; // Outputs: 11
echo $x . "<br>";   // Outputs: 11

$x = 10;
echo $x++ . "<br>"; // Outputs: 10
echo $x . "<br>";   // Outputs: 11

$x = 10;
echo --$x . "<br>"; // Outputs: 9
echo $x . "<br>";   // Outputs: 9

$x = 10;
echo $x-- . "<br>"; // Outputs: 10
echo $x . "<br>";   // Outputs: 9

//5. Logical operators
$a = 10;
$b = 20;
var_dump($a > 5 and $b > 5);
var_dump($a && $b);

var_dump($a > 30 or $b > 30);
var_dump($a || $b);

var_dump(!($a > 5));

var_dump($a > 5 xor $b > 5);

// 6. String operators

$x = "Hello";
$y = " World!";
echo $x . $y . "<br>"; // Outputs: Hello World!

$x .= $y;
echo $x . "<br>"; // Outputs: Hello World!

// 7. Spaceship Operator (<=>) - introduced in PHP 7
// This operator will return -1, 0 or 1 if the first expression is less than, equal to, or greater than the second expression

// Integers
print (1 <=> 1); // 0
print (1 <=> 2); // -1
print (2 <=> 1); // 1

// Floats
print (1.5 <=> 1.5); // 0
print (1.5 <=> 2.5); // -1
print (2.5 <=> 1.5); // 1

// Strings
print ("a" <=> "a"); // 0
print ("a" <=> "b"); // -1
print ("b" <=> "a"); // 1

// Arrays
echo [] <=> [1, 2, 3]; // -1
echo [1, 2, 3] <=> [3, 2, 1]; // -1

echo [] <=> []; // 0
echo [1, 2, 3] <=> [1, 2, 3]; // 0

echo [3, 2, 1] <=> [1, 2, 3]; // 1
echo [1, 2, 3] <=> []; // 1

// It makes easier to write comparison functions for sorting functions such as usort, uasort, etc.
// For example:
$products = [
    ['name' => 'Bag' , 'price' => 49.99],
    ['name' => 'Belt' , 'price' => 34.99],
    ['name' => 'Shoes' , 'price' => 50],
    ['name' => 'Shirt' , 'price' => 34.99],
];

$comparisonFn = function (array $a, array $b) {
    return $a['price'] <=> $b['price'];
};

usort($products, $comparisonFn);
var_dump($products);

?>

<!---------------------------- Műveletek számokkal, kiíratások, stb. --------------------->
<?php
$x = 5;
$y = 10;
$z1 = $x + $y;
$z2 = $x * $y;
$z3 = $x / $y;
echo $z1;
echo "$z1";
echo '$z1';
echo "<br>Összeg: " . $z1;
echo "<p>Összeg: $z1</p>";
$z = $x . "*" . $y . " eredménye:" . ($x * $y) . " lesz";
print $z;
?>

<!---------------------------- HTML táblázat kiíratása echo-val -------------------------->
<?php
echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";
echo "<tr><td>";
echo 1;
echo "</td><td>";
echo 12;
echo "</td></tr>";
echo "</table>";
?>

<!---------------------------- HTML táblázat kiíratása heredoc-al -------------------------->
<?php
echo <<<EOD
            <table border=\"1\" align=\"center\">
            <tr><th>Quantity</th><th>Price</th></tr>
            <tr><td>1</td><td>12</td></tr>
            </table>
            EOD;
?>

<?php
$a = 'Variables';
$str = <<<EOD
            Example of string
            spanning multiple lines
            using nowdoc syntax.
            $a are parsed.
            EOD;
echo $str;
?>

<!--------------------------- FELTÉTELES UTASÍTÁSOK: if, switch ------------------------->
<?php
$age = 20;
$salary = 300000;

// Sample if
if ($age == 20) {
    echo "1";
}

// Without circle braces
if ($age === 20)
    echo "1";

// Sample if-else
if ($age > 20) {
    echo "1";
} else {
    echo "2";
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';
echo '<br>';

// Short ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"

// Null coalescing operator
$var = isset($name) ? $name : 'John';
$var = $name ?? 'John'; // Equivalent of above
echo $var . '<br>';

// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}
?>

<?php
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<?php
$t = date("H");
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<?php
$x = rand(0, 3);
switch ($x) {
    case 0:
        echo 'x is equal 0';
        break;
    case 1:
        echo 'x is equal 1';
        break;
    case 2:
        echo 'x is equal 2';
        break;
    case 3:
        echo 'x is equal 3';
        break;
}
?>

