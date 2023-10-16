<?php
//-------------------------SUMMARY-----------------------------//

/*
    - TUse the __invoke() magic method is invoked when you call an object as a function.
    - An object of a class that implements the __invoke() is known as a function object or functor. It’s also a callable.
 */

/*
 *  The __invoke() magic method has the following syntax:
 *      __invoke( ...$values): mixed
 *      - $name is the name of the method that is being called by the object.
        - $arguments is an array of arguments passed to the method call.
 */

// Example: The following defines the class Comparator that implements the __invoke() magic method


class Comparator
{
    private $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function __invoke($a, $b)
    {
        return $a[$this->key] <=> $b[$this->key];
    }
}

$customers = [
    ['id' => 1, 'name' => 'John', 'credit' => 20000],
    ['id' => 3, 'name' => 'Alice', 'credit' => 10000],
    ['id' => 2, 'name' => 'Bob', 'credit' => 15000]
];

// sort customers by names
usort($customers, new Comparator('name'));
print_r($customers);

// sort customers by credit
usort($customers, new Comparator('credit'));
print_r($customers);


class Adder
{
    public function __invoke(int $a, int $b): int
    {
        return $a + $b;
    }
}

class Calculator
{
    public function __construct(
        private Adder $adder
    ) {}

    public function add(): int
    {
        return ($this->adder)(2, 3);
    }
}

$adder = new Adder();
$calculator = new Calculator($adder);
echo $calculator->add(); // prints 5
