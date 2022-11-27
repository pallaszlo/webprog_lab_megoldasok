<?php
class Subject
{
    public $code;
    public $name;
    public $students = [] ;

    public function __construct(string $code, string $name, array $students = [] ){

        $this->code = $code;
        $this->name =$name;
        $this->students=$students;

    }
    public function getName(){
        return $this->name;
    }

    public function getCode(){
        return $this->code;
    }

    public function setCode($code){
        $this->code =$code;
    }

    public function setName($name){
        $this->name =$name;
    }

    public function existControl($studentNumber){

        if(count($this->students) == 0) return true;
        foreach($this->students as $stu){
            if ($stu->getStuNum() == $studentNumber){
                return false;
            }
        }
        return true;
    }

    public function getStudents(){
        return $this->students;
    }

    /**
     * Method accepts student name and number, creates instance of the Student class, adds inside $students array
     * and returns created instance
     *
     * @param string $name
     * @param string $studentNumber
     * @return \Student
     */
    public function addStudent(string $name, string $studentNumber): Student
    {
        if($this->existControl($studentNumber)){
            $stu = new Student($name,$studentNumber);
            $this->students[] = $stu;
            return $stu;
        }
        else{
            //echo "The student has already exists";
            throw new Exception("Hiba");
        }
    }

    public function __toString(): string
    {
        return  $this->getCode() . '-' . $this->getName() . "\n";
    }
}
