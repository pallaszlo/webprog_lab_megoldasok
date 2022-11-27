<!DOCTYPE html >
<html>
    <head>
        <title>A simple Calculator class</title>
        <link rel="stylesheet" type="text/css" href="common.css" />
    </head>
    <body>

        <h2>A simple Calculator class</h2>

        <?php

        class Calculator {

            private $_val1;
            private $_val2;

            public function __construct($val1, $val2) {
                $this->_val1 = $val1;
                $this->_val2 = $val2;
            }

            public function add() {
                return $this->_val1 + $this->_val2;
            }

            public function subtract() {
                return $this->_val1 - $this->_val2;
            }

            public function multiply() {
                return $this->_val1 * $this->_val2;
            }

            public function divide() {
                return $this->_val1 / $this->_val2;
            }

            public function __get($property) {
                if (property_exists($this, $property)) {
                    return $this->$property;
                }
            }

            public function __set($property, $value) {
                if (property_exists($this, $property)) {
                    $this->$property = $value;
                }
            }

            
            public function __toString() {
                return $this->_val1 ." ". $this->_val2;
            }            

        }

        $calc = new Calculator(3, 4);
        echo "<p>3 + 4 = " . $calc->add() . "</p>";
        echo "<p> $calc->_val1 + $calc->_val2 = " . $calc->add() . "</p>";
        echo "<p>3 - 4 = " . $calc->subtract() . "</p>";
        echo  "<p>3 * 4 = " . $calc->multiply() . "</p>";
        echo "<p>3 / 4 = " . $calc->divide() . "</p>";
         echo $calc->_val1;
        ?>

    </body>
</html>
