<!--
********************************************
****** 2.LABORGYAKORLAT SEGÉDLET ***********
********************************************
-->

<!-------------- CIKLUSOK ----------------->
<?php
/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$i = 1;
while ($i <= 3) {
    $i++;
    echo "The number is " . $i . "<br>";
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$i = 1;
do {
    $i++;
    echo "The number is " . $i . "<br>";
} while ($i <= 3);

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 10; $x++) {
    echo "Number: $x <br>";
}

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array
$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $x) {
    echo "Number: $x <br>";
}

// Use the indexes within the loop
$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $post) {
    echo "{$index} - {$post} <br>";
}

// Use the keys within the loop for an associative array
$person = [
    'first_name' => 'Joe',
    'last_name' => 'Jack',
    'email' => 'joe@gmail.com',
];

// Get Keys
foreach ($person as $key => $val) {
    echo "{$key} - {$val} <br>";
}

?>


<!-------------- FÜGGVÉNYEK ---------------->
<?php
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

// simple function without parameters and return
function registerUser(): void
{
    echo 'User has been registered!';
}

// Running a function
registerUser();

// Adding params
function registerUser2($username)
{
    echo "User {$username} has been registered!";
}

// Pass in an argument
registerUser2('John');

// Returning values
function calculateSquare($number)
{
    $square = $number * $number;
    return $square;
}

// Calling the function
$result = calculateSquare(5);
echo "Square of 5 is: " . $result;

// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
    return $num1 - $num2;
}

echo subtract();

//Return Type Declarations
function addNumbers(int $num1, int $num2): int
{
    $sum = $num1 + $num2;
    return $sum;
}

// Calling the function and storing the returned value
$result = addNumbers(5, 3);
echo "The sum is: " . $result;

//Passing Arguments by Reference
function incrementByReference(&$num)
{
    $num++;
}

$value = 5;
incrementByReference($value);
echo $value;  // Output: 6

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
    return $num1 + $num2;
};

echo $add(5, 5);

// Closure
$rate = .05;

// Exports variable to closure's scope
$calculateTax = function ($value) use ($rate) {
    return $value * $rate;
};

print $calculateTax(100); // 5

// Arrow functions provide a more concise syntax for the anonymous functions
// Sintax: fn (arguments) => expression;

$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);

// Variadic functions: accepts a variable number of parameters
// Do use the ... operator to define a variadic function.
// Only the last parameter can be variadic.

function sum(int ...$numbers): int
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }

    return $total;
}

echo sum(10, 20) . '<br>'; // 30
echo sum(10, 20, 30) . '<br>'; // 60

?>

<!-------------- TÖMBÖK -------------------->
<?php
//How to Initialize an Array
$array = array();
//or
$array = [];

// Add elements to an array
$array = [];
$array[] = 'One';
$array[] = 'Two';
$array[] = 'Three';
echo '<pre>';
print_r($array);

// Array initialized with values
$array = ['One', 'Two', 'Three'];

// How to Access Array Elements
$array = ['One', 'Two', 'Three'];
// get the first element of the $array array
echo $array[0];
echo "<br>";
// get the second element of the $array array
echo $array[1];
echo "<br>";
// get the third element of the $array array
echo $array[2];
echo "<br>";

// Output the array using classical for
$array_length = count($array);
for ($i = 0; $i < $array_length; ++$i) {
    echo $array[$i];
    echo '<br>';
}

// Associative Arrays
$employee = [
    'name' => 'John',
    'email' => 'john@example.com',
    'phone' => '1234567890',
];

// get the value of employee name
echo $employee['name'];

// get all values
foreach ($employee as $key => $value) {
    echo $key . ':' . $value;
    echo '<br>';
}

// Multidimensional Arrays
$employee = [
    'name' => 'John',
    'email' => 'john@example.com',
    'phone' => '1234567890',
    'hobbies' => ['Football', 'Tennis'],
    'profiles' => ['facebook' => 'johnfb', 'twitter' => 'johntw']
];

// access hobbies
echo $employee['hobbies'][0];   // Football
echo $employee['hobbies'][1];   // Tennis
// access profiles
echo $employee['profiles']['facebook']; // johnfb
echo $employee['profiles']['twitter'];  // johntw

//Unpacking Array Values with PHP (spread operator ...)
$plant_eaters = ["Horse", "Goat", "Rabbit"];
$meat_eaters = ["Lion", "Tiger", "Crocodile"];
$animals = ["Dog", ...$plant_eaters, ...$meat_eaters, "Cat"];
print_r($animals);

// Some Useful PHP Array Functions
//https://code.tutsplus.com/understand-arrays-in-php--cms-31738t
//The count() Function
$array = ['One', 'Two', 'Three'];
echo count($array); // Output: 3

//The is_array() Function
if (is_array($array)) {
    // perform some array operation
}

//The in_array() Function
if (in_array('One', $array)) {
    echo 'Yes';
} else {
    echo 'No';
}

//The explode() Function
$string = "One,Two,Three";
// explode a string by comma
$array = explode(",", $string);
// output should be an array
echo '<pre>';
print_r($array);

//The implode() Function
$array = ['One', 'Two', 'Three'];
$string = implode(",", $array);
// output should be a string
echo $string;   // output: One,Two,Three

//The array_push() Function
array_push($array, 'Four');
echo '<pre>';
print_r($array);

//The array_pop() Function
$element = array_pop($array);
echo '<pre>';
print_r($array);

// The array_slice() Function
$people = ["Adam", "Amanda", "Andrew", "Laura", "Monty", "Sally", "Sajal", "Steven"];
$members = array_slice($people, 2, 4);
print_r($members);

// The array_filter() Function
$names = ['Lajos', 'Peter', null, 'Geza', 'Andras', null];
$validNames = array_filter($names, function ($name) {
    return !is_null($name);
});

print_r($validNames);
sort($validNames);
print_r($validNames);

// The array_map() Function
$capitalizedNames = array_map(function ($name) {
    return strtoupper($name);
}, $validNames);

print_r($capitalizedNames);

// The array_walk() Function
// The array_walk() function walks through the entire array regardless of pointer position and applies a callback function or user-defined function to every element of the array
// You can change an array element's value in the user-defined function by specifying the first parameter as a reference: &$value

// print out array elements
$people = ["Adam", "Amanda", "Andrew", "Laura", "Monty"];
array_walk($people, function ($value, $key) {
    echo "$key:$value" . "\n";
});

// change array elements
array_walk($people, function (&$value, $key) {
    $value = strtoupper($value);
});

print_r($people);

// change array elements recursively
$array = array(
    array("apple", "banana", "cherry"),
    array("orange", "grape", "pineapple")
);

function change_case(&$value)
{
    $value = strtoupper($value);
}

array_walk_recursive($array, 'change_case');

print_r($array);

// performing calculations
$array = array(1, 2, 3, 4, 5);
$total = 0;
array_walk($array, function ($value, $key) use (&$total) {
    $total += $value;
});

echo "The total sum is: $total";

// The array_map() Function
//It allows developers to apply a callback function to each element of an array, and then return a new array with the results.

function lowercase($element)
{
    return strtolower($element);
}

$array = ['Apple', 'BANANA', 'Mango', 'orange', 'GRAPES'];
$results = array_map('lowercase', $array);
print_r($results);

$employeeNames = ['john', 'mark', 'lisa'];
$employeeEmails = ['john@example.com', 'mark@example.com', 'lisa@example.com'];
$results = array_map(null, $employeeNames, $employeeEmails);
print_r($results);

$myArr = [1, 2, 3, 4, 5, 6];
$doubledValues = array_map(function ($var) {
    return $var * 2;
}, $myArr);

print_r($doubledValues);

$myArr = [1, 2, 3, 4, 5, 6];
$doubledValues = array_map(fn($var) => $var * 2, $myArr);
print_r($doubledValues);

/* The array_filter() Function
* The function Iterates over each value in the array passing them to the callback function. If the callback function returns true, the current value from the array is returned into the result array.
*  Array keys are preserved.
* Syntax
 * array_filter (
        array $array ,
        callable|null $callback = null ,
        int $mode = 0
    ) : array
*/
$numbers = [1, 2, 3, 4, 5];

$odd_numbers = array_filter(
    $numbers,
    function ($number) {
        return $number % 2 === 1;
    }
);

print_r($odd_numbers);


$names = ['alex', 'john', null, 'michael'];

$validNames = array_filter($names, function ($name) {
    return !is_null($name);
});
// ['alex', 'john', 'michael']

$validNames = array_filter($names, fn($name) => !is_null($name));
print_r($validNames);

// By default, the array_filter() function passes the value of each array element to the callback function for filtering.
//Sometimes, you want to pass the key, not value, to the callback function. In this case, you can pass ARRAY_FILTER_USE_KEY as the third argument of the array_filter() function. For example:

$inputs = [
    'first' => 'John',
    'last' => 'Doe',
    'password' => 'secret',
    'email' => 'john.doe@example.com'
];

$filtered = array_filter(
    $inputs,
    fn($key) => $key !== 'password',
    ARRAY_FILTER_USE_KEY
);

print_r($filtered);

// To pass both the key and value of the element to the callback function, you pass the ARRAY_FILTER_USE_BOTH value as the third argument of the array_filter() function. For example:
$inputs = [
    'first' => 'John',
    'last' => 'Doe',
    'password' => 'secret',
    'email' => ''
];

$filtered = array_filter(
    $inputs,
    fn($value, $key) => $value !== '' && $key !== 'password',
    ARRAY_FILTER_USE_BOTH
);

print_r($filtered);


?>


