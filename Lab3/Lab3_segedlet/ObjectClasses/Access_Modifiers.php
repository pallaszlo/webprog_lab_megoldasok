<?php
//-------------------------SUMMARY-----------------------------//

/*
    - Use the public access modifier to allow access to properties and methods from both inside and outside of the class.
    - Use the private access modifier to prevent access from the outside of the class.
    - Do use private properties with a pair of public getter/setter methods.
 */

/*
 PHP has three access modifiers: public, private, and protected.
    - The public access modifier allows you to access properties and methods from both inside and outside of the class.
    - The private access modifier prevents you from accessing properties and methods from the outside of the class.
 */

class Customer
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$customer = new Customer();

$customer->setName('Bob');
echo $customer->getName();
