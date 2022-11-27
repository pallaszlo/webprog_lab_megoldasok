<?php

require_once "Student.php";
require_once "Subject.php";
require_once "University.php";

$university = new University();
try {
    $subject = $university->addSubject('112', 'Web II');
    $subjectTest = $university->addSubject('101', 'CS');
    $subjectTest = $university->addSubject('101', 'CS');
} catch (Exception $e) {
    echo $e->getMessage();
}
$subject->addStudent('Jane', '520');
//$subject->addStudent('Jane', '520');
//$university->print();

//$subject = new Subject('112', 'Web II');
$subject->addStudent('George', '123');
$subject->addStudent("Mary", '234');
$university->addStudentOnSubject('112', new Student('David', '345'));
$university->addStudentOnSubject('101', new Student('John', '300'));
$university->addStudentOnSubject('101', new Student('Ivy', '564'));
$subject2 = $university->addSubject('113', 'Web III');
$subject2->addStudent('Bob', '456');
$subject2->addStudent('Brad', '567');
echo $university->getNumberOfStudents();
$university->print();


/**
* This method must print all subjects and for each subject all students registered on the subject int the following format
* SubjectCode - SubjectName
* -------------------------
* StudentName - StudentNumber
* Student2Name - Student2Number
* ...
*
* Subject2Code - Subject2Name
* --------------------
* StudentName - StudentNumber
* Student2Name - Student2Number
* ...
*
*/
/*
112 - Web II
--------------------
George - 123
Mary - 234
David - 345

113 - Web III
--------------------
Bob - 456
Brad - 567
*/
