<?php
namespace Lab4\Fel2;

include "Student.php";

// shallow_copy
/*
$s1 = new Student(1, 'Kiss', 'Lajos');
echo $s1;
$s2 = new Student('2', 'Nagy', 'Elek');
echo $s2;
$s2 = $s1;
$s1->lastName = "Joska";
echo $s2;
var_dump($s2);
*/

// deep_copy
$s1 = new Student(1, 'Kiss', 'Lajos');
echo $s1;

$s2 = clone $s1;
echo $s2;

$s1->setFirstName("Joska");
echo $s1;
echo $s2;
