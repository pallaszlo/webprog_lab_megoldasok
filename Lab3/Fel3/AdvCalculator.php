<?php
namespace Fel3;
use Fel2\Calculator;

include "../Fel2/Calculator.php";

class CalcAdvanced extends Calculator
{

    private static array $allowedFunctions = array("pow" => 2, "sqrt" => 1, "exp" => 1);

    public function __construct($val1, $val2 = null)
    {
        parent::__construct($val1, $val2);
    }

    public function __call($methodName, $arguments)
    {
        if (in_array($methodName, array_keys(self::$allowedFunctions))) {
            $functionArguments = array($this->val1);
            if (self::$allowedFunctions[$methodName] == 2) {
                array_push($functionArguments, $this->val2);
            }
            return call_user_func_array($methodName, $functionArguments);
        } else {
            //die("<p>Method 'CalcAdvanced::$methodName' doesn't exist</p>");
            throw new Exception("Nem létező művelete!");
        }
    }

}
