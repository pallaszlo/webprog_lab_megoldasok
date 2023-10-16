<?php
//-------------------------SUMMARY-----------------------------//

/*
    - PHP constructor is a special method that is called automatically when an object is created.
    - Do use constructor promotion as much as possible to make the code shorter.
 */

/*
    PHP allows you to declare a constructor method for a class with the name __construct() as follows:
    Example:

    class ClassName
    {
	    function __construct()
	    {
		    // implementation
	    }
    }

    Constructor call:
    $object = new ClassName()
 */

/*
    The following example defines a constructor for the BankAccount class. The constructor initializes the $accountNumber and $balance properties:

    class BankAccount
    {
	    private $accountNumber;
	    private $balance;

	    public function __construct($accountNumber, $balance)
	    {
		    $this->accountNumber = $accountNumber;
		    $this->balance = balance;
	    }
    }

    $account = new BankAccount(1, 100);
 */

//-----------------------PHP constructor promotion-----------------------//

// To improve this, PHP 8.0 introduced the new concept called constructor promotion that promotes the constructor’s arguments to properties.
// For example, instead of writing the previous code:

class BankAccount
{
    function __construct( public $accountNumber, private $balance)
    {
    }
}

$account = new BankAccount(1, 100);
echo $account->accountNumber;
