<?php
//-------------------------SUMMARY-----------------------------//

/*
    - An abstract class cannot be instantiated. It provides an interface for other classes to extend.
    - An abstract method doesn’t have an implementation. If a class contains one or more abstract methods, it must be an abstract class.
    - A class that extends an abstract class needs to implement the abstract methods of the abstract class.
 */

/*
    An abstract class is a class that cannot be instantiated. Typically, an abstract defines an interface for other classes to extend.
    To define an abstract class, you add the abstract keyword as follows:

    abstract class className
    {
        // ...
     }

    To define an abstract method, you also use the abstract keyword before the method signature like this

    abstract function methodName(arguments);
 */

// Define an abstract class
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // This is an abstract method that must be implemented by concrete subclasses
    abstract public function makeSound();

    public function eat() {
        echo $this->name . " is eating." . PHP_EOL;
    }
}

// Create a concrete subclass of the abstract class
class Dog extends Animal {
    public function makeSound() {
        echo $this->name . " barks." . PHP_EOL;
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo $this->name . " meows." . PHP_EOL;
    }
}

// Instantiate objects
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

// Call methods
$dog->makeSound(); // Output: Buddy barks.
$dog->eat();       // Output: Buddy is eating.

$cat->makeSound(); // Output: Whiskers meows.
$cat->eat();       // Output: Whiskers is eating.


// Define an abstract class Shape
abstract class Shape {
    abstract public function calculateArea();
    abstract public function calculatePerimeter();
}

// Create a concrete subclass for Circle
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Create a concrete subclass for Rectangle
class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }

    public function calculatePerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

// Instantiate objects
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Calculate and display area and perimeter
echo "Circle Area: " . $circle->calculateArea() . PHP_EOL;
echo "Circle Perimeter: " . $circle->calculatePerimeter() . PHP_EOL;

echo "Rectangle Area: " . $rectangle->calculateArea() . PHP_EOL;
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . PHP_EOL;
