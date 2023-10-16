<?php
//-------------------------SUMMARY-----------------------------//

/*
    - The __call() method is invoked automatically when a nonexisting method or an inaccessible method is called.
    - Use the __call() method to wrap existing API into a class.
 */

/*
 *  The __call() method is invoked automatically when a non-existing method or inaccessible method is called. The following shows the syntax of the __call() method:
 *  public __call ( string $name , array $arguments ) : mixed
 *      - $name is the name of the method that is being called by the object.
        - $arguments is an array of arguments passed to the method call.
 */

// Example: want to develop the Str class that wraps existing string functions such as strlen(), strtoupp(), strtolower(), etc.


class Str
{
    private $s = '';

    private $functions = [
        'length' => 'strlen',
        'upper' => 'strtoupper',
        'lower' => 'strtolower'
        // map more method to functions
    ];

    public function __construct(string $s)
    {
        $this->s = $s;
    }

    public function __call($method, $args)
    {
        if (!in_array($method, array_keys($this->functions))) {
            throw new BadMethodCallException();
        }

        array_unshift($args, $this->s);

        return call_user_func_array($this->functions[$method], $args);
    }
}

$s = new Str('Hello, World!');

echo $s->upper() . '<br>'; // HELLO, WORLD!
echo $s->lower() . '<br>'; // hello, world!
echo $s->length() . '<br>'; // 13
