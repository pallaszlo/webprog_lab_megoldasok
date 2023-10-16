<?php
declare(strict_types=1);

require_once "Student.php";
require_once "Subject.php";
require_once "University.php";

$univ = new University();

$webProg = null;
$database = null;

try {
    $webProg = $univ->addSubject('101', 'Web programming');
    $database = $univ->addSubject('102', 'Database');
    //$database2 = $univ->addSubject('101', 'Database');
} catch (Exception $e) {
    echo $e->getMessage();
}

$webProg->addStudent('Kiss Lajos', '520');
$webProg->addStudent('Nagy Peter', '521');
$database->addStudent('Egy Elek', '522');
$database->addStudent('Ket Ella', '523');

$univ-> addSubject('103', 'Java programming');
$univ->addStudentOnSubject('103', new Student("524", "Harom Ella"));

$univ->print();
echo "Total number of students: " . $univ->getNumberOfStudents();

