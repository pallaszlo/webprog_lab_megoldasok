<?php

/*
 * Code reuse is one of the most important aspects of object-oriented programming. In PHP, you use inheritance to enable code reuse in different classes with the same inheritance hierarchy.
 * To achieve code reuse, you move the common functionality of classes to methods of the parent class. However, inheritance makes the code very tightly coupled.
 * Therefore, overuse of inheritance may cause the code very hard to maintain.
 * To overcome this problem, PHP 5.4 introduced a new reusable unit of code called trait.
 * Traits allow you to reuse various methods freely in many different classes that do not need to be in the same class hierarchy.
 * Inheritance allows classes to reuse the code vertically while the traits allow classes reuse the code horizontally.
 * A trait is similar to a class, but it is only for grouping methods in a fine-grained and consistent way.
 * PHP does not allow you to create an instance of a Trait like an instance of a class. And there is no such concept of an instance of a trait.
 *
 */

//----------------PHP Trait example---------------------//


trait Logger
{
    public function log($msg)
    {
        echo '<pre>';
        echo date('Y-m-d h:i:s') . ':' . '(' . __CLASS__ . ') ' . $msg . '<br/>';
        echo '</pre>';
    }
}

// To use a trait in a class, you use the use keyword.

class BankAccount
{
    use Logger;

    private $accountNumber;

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->log("A new $accountNumber bank account created");
    }
}

class User
{
    use Logger;

    public function __construct()
    {
        $this->log('A new user created');
    }
}

