<?php

class Calculator
{

    protected $val1;
    protected $val2;

    public function __construct($val1, $val2)
    {
        $this->val1 = $val1;
        $this->val2 = $val2;
    }

    public function add()
    {
        return $this->val1 + $this->val2;
    }

    public function subtract()
    {
        return $this->val1 - $this->val2;
    }

    public function multiply()
    {
        return $this->val1 * $this->val2;
    }

    public function divide()
    {
        return $this->val1 / $this->val2;
    }

    public function __toString()
    {
        return $this->val1 . " " . $this->val2;
    }

}

class AdvCalculator extends Calculator
{
    private static $functions = array("pow" => 2, "sqrt" => 1, "exp" => 1);

    public function __construct($val1, $val2)
    {
        parent::__construct($val1, $val2);
    }

    public function __call(string $name, array $arguments)
    {
        if (in_array($name, array_keys(self::$functions))) {
            $args = array($this->val1);
            if(self::$functions[$name] == 2){
                array_push($args, $this->val2);
            }
            return call_user_func_array($name, $args);
        } else {
            throw new Exception("Nem letezo metodus!");
        }
    }
}


$calc = new AdvCalculator(3, 4);
try {
    echo "<p>3 + 4 = " . $calc->add() . "</p>";
    echo "<p>3 - 4 = " . $calc->subtract() . "</p>";
    echo "<p>3 * 4 = " . $calc->multiply() . "</p>";
    echo "<p>3 / 4 = " . $calc->divide() . "</p>";
    echo $calc->powe();
} catch (Exception $e) {
    echo $e->getMessage();

}
