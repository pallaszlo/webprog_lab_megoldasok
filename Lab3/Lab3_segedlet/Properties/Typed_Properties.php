<?php
//-------------------------SUMMARY-----------------------------//

/*
    - Typed properties include modifiers (private, protected, and public) and types (except void and callable)
    - Typed properties have uninitialized states, not null like untyped properties.
 */


/*
    With no types the default value of the property will be null
    Example:
        class BankAccount
        {
            public $balance;
        }

        $account = new BankAccount();
        var_dump($account->balance); // null
 */

/*
    PHP 7.4 allows you to type hints the class properties with any types except void and callable
    Example:
 */

class BankAccount
{
    public float $balance;
}

$account = new BankAccount();
var_dump($account->balance); // It doesn’t work because the $balance property now becomes uninitialized. The default value of the $balance property is not null like before

// The typed properties can be initialized in the declaration or in the constructor

/*
    class BankAccount
    {
        public float $balance = 0;
    }

    class BankAccount
    {
        public float $balance = 0;

        public function __construct(float $balance)
        {
            $this->balance = $balance;
        }
    }
 */
