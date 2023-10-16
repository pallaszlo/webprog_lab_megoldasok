<?php
//-------------------------SUMMARY-----------------------------//

/*
    - Use clone to perform a shallow copy of an object.
    - Combine clone and __clone() method to create a deep copy of an object.
 */

//To clone an object is to create a copy of an object. The clone keyword allows you to perform a shallow copy of an object.
// By combining the clone keyword and __clone() magic method, you can perform a deep copy of an object.


class Person0
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$bob = new Person0('Bob');
// assign bob to alex and change the name
$alex = $bob;


$alex->name = 'Alex';

// show both objects
var_dump($bob);
var_dump($alex);

//-------------------Copying object using the clone keyword------------------------

$bob = new Person0('Bob');

// clone an object
$alex = clone $bob;
$alex->name = 'Alex';

// show both objects
var_dump($bob);
var_dump($alex);


//-------------------Shallow copy-----------------------------------
/*
 *
 *The clone performs a shallow copy of an object. It means that:
 *  Create a copy of all properties of an object.
 *  If a property references another object, the property remains a reference.
 *
 */


//-------------------Deep copy with __clone method-----------------------------

/*
 * Deep copy creates a copy of an object and recursively creates a copy of the objects referenced by the properties of the object.
 * Since PHP calls the __clone() method automatically after cloning an object, you can clone the objects referenced by the properties of the class.
 */


class Address
{
    public $street;

    public $city;
}

class Person
{
    public $name;

    public $address;

    public function __construct($name)
    {
        $this->name = $name;
        $this->address = new Address();
    }

    public function __clone()
    {
        $this->address = clone $this->address;
    }
}

$bob = new Person('Bob');
$bob->address->street = 'North 1st Street';
$bob->address->city = 'San Jose';

$alex = clone $bob;
$alex->name = 'Alex';
$alex->address->street = '1 Apple Park Way';
$alex->address->city = 'Cupertino';

var_dump($bob);
var_dump($alex);

//Output
/*
 * object(Person)#1 (2) {
  ["name"]=> string(3) "Bob"
  ["address"]=> object(Address)#2 (2) {
    ["street"]=> string(16) "North 1st Street"
    ["city"]=> string(8) "San Jose"
  }
}

object(Person)#3 (2) {
  ["name"]=> string(4) "Alex"
  ["address"]=> object(Address)#4 (2) {
    ["street"]=> string(16) "1 Apple Park Way"
    ["city"]=> string(9) "Cupertino"
  }
}
 */
