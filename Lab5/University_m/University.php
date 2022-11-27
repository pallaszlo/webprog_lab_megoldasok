<?php
require_once "AbstractUniversity.php";
require_once "Subject.php";

class University extends AbstractUniversity
{

    /*this method return true if the subject does not exist.*/
    public function controlSubject(string $code, string $name)
    {

        if (count($this->subjects) == 0) return true;
        foreach ($this->subjects as $sub) {

            if ($sub->getCode() == $code && $sub->getName() == $name) {
                return false;
            }
        }
        return true;
    }

    public function addSubject(string $code, string $name): Subject
    {
        if ($this->controlSubject($code, $name)) {
            $sub = new Subject($code, $name);
            $this->subjects[] = $sub;
            return $sub;
        } else {
            throw new Exception("Subject exists!");
        }
    }

    public function addStudentOnSubject(string $subjectCode, Student $student)
    {
        foreach ($this->subjects as $s) {
            if ($s->getCode() == $subjectCode) {
                return $s->addStudent($student->getName(), $student->getStuNum());
            }
        }
    }

    public function getStudentsForSubject(string $subjectCode): array
    {
        foreach ($this->subjects as $s) {
            if ($s->getCode() == $subjectCode) {
                return $s->getStudents();
            }
        }
        return [];
    }

    public function getNumberOfStudents()
    {
        $total = 0;
        foreach ($this->subjects as $s) {
            foreach ($s->getStudents() as $st) {
                $total++;
            }
        }
        echo '---------------------------------' . "\n";
        return "The student total: " . $total . "\n";
        echo '---------------------------------' . "\n";

    }

    public function print()
    {
        foreach ($this->subjects as $s) {
            echo '---------------------------------' . "\n";
            echo $s;
            echo '---------------------------------' . "\n";

            foreach ($s->getStudents() as $st) {
                echo $st->getName() . "-" . $st->getStuNum();
                echo "\n";
            }
        }
    }
}
