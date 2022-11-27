<?php



class Student {

    public $ssn;
    public $firstName;
    public $lastName;

    public function __construct($ssn, $firstName, $lastName) {
        $this->ssn = $ssn;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct() {
        //echo sprintf("Student with SSN# %s is terminated.<br>", $this->ssn);
    }

    public function __toString() {
        return sprintf("SSN: %s, Name: %s, %s<br>", $this->ssn, $this->lastName, $this->firstName);
    }

    public function __clone() {
        echo 'Copying object <br>';
    }

}

//shallow_copy() {
/*
$p1 = new Student('1234567888', 'Kiss', 'Lajos');
echo $p1;
$p2 = new Student('1234567889', 'Nagy', 'Elek');
echo $p2;
$p2 = $p1;
$p1->lastName = "Joska";
echo $p2; 
var_dump($p2);
*/

 //deep_copy() {

$p1 = new Student('1234567888', 'Kiss', 'Lajos');
echo $p1;

$p2 = clone $p1;
echo $p2;

$p1->lastName = "Joska";
echo $p2; 

?>
