<?php
namespace Lab4\Fel1;

class Calculator
{
    private float $val1;
    private float $val2;

    public function __construct(float $val1, float $val2)
    {
        $this->val1 = $val1;
        $this->val2 = $val2;
    }

    public function add(): float
    {
        return $this->val1 + $this->val2;
    }

    public function subtract(): float
    {
        return $this->val1 - $this->val2;
    }

    public function multiply(): float
    {
        return $this->val1 * $this->val2;
    }

    public function divide(): float
    {
        return $this->val1 / $this->val2;
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }


    public function __toString()
    {
        return $this->val1 . " " . $this->val2;
    }

}

/*
$calc = new Calculator(3, 4);
echo "<p>3 + 4 = " . $calc->add() . "</p>";
echo "<p> $calc->val1 + $calc->val2 = " . $calc->add() . "</p>";
echo "<p>3 - 4 = " . $calc->subtract() . "</p>";
echo "<p>3 * 4 = " . $calc->multiply() . "</p>";
echo "<p>3 / 4 = " . $calc->divide() . "</p>";
echo $calc->val1;
*/


