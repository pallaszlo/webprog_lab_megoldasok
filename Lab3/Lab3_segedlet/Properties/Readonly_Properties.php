<?php
//-------------------------SUMMARY-----------------------------//

/*
    - A readonly property can be initialized once from within the class.
    - Use the readonly keyword in a typed property to make the property readonly.
 */

/*
    To define a readonly property, you use the readonly keyword in a typed property:

    class MyClass
    {
        private readonly type propertyName;
    }

    class MyClass
    {
        public function __construct(private readonly type propertyName)
        {
        }
    }
 */

class User
{
    public readonly string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

$user = new User('joe','secure');
//$user->username = 'john'; //Fatal error: Uncaught Error: Cannot modify readonly property User::$username
echo $user->username;
