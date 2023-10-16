<?php
//-------------------------SUMMARY-----------------------------//
/*
    - Objects have states and behaviors.
    - A class is a blueprint for creating objects.
    - Properties represent the object’s state, and methods represent the object’s behavior. Properties and methods have visibility.
    - Use the new keyword to create an object from a class.
    - The $this variable references the current object of the class.
 */


//-----------Define a class: to define a class, you specify the class keyword -------------------//

/*
 * Example:

    class BankAccount
    {

    }
*/

/*
 **
 By convention, you should follow these rules when defining a class:
    - A class name should be in the upper camel case where each word is capitalized. For example, BankAccount, Customer, Transaction, and DebitNote.
    - If a class name is a noun, it should be in the singular noun.
    - Define each class in a separate PHP file.
*/


/*
 * From the BankAccount class, you can create a new bank account object by using the new keyword like this:
 *
    class BankAccount
    {
    }
    $account = new BankAccount();
 */

//--------------------Add properties to a class-------------------------//

/*
    class BankAccount
    {
        public $accountNumber;
        public $balance;
    }

    To access a property, you use the object operator (->) like this:

    $account = new BankAccount();
    $account->accountNumber = 1;
    $account->balance = 100;
 */

//--------------------Add methods to a class---------------------------//

/*
    class BankAccount
    {
	    public $accountNumber;
	    public $balance;

	    public function deposit($amount)
	    {
		    if ($amount > 0) {
			    $this->balance += $amount;
		    }
	    }
    }

    To call a method, you also use the object operator (->) as follows:

    $account = new BankAccount();
    $account->accountNumber = 1;
    $account->balance = 100;
    $account->deposit(100);
 */

class BankAccount
{
    public $accountNumber;

    public $balance;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;

    }
}

$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;

$account->deposit(100);
