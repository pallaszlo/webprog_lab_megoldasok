<?php

class Student
{
    public $name;
    public $studentNumber;

    public function __construct($name, $studentNumber){
    	$this->name =$name;
    	$this->studentNumber = $studentNumber;
    }

    public function getName(){
    	return $this->name;
    }

    public function setName($name){
    	$this->name =$name;
    }

    public function getStuNum(){
    	return $this->studentNumber;
    }

    public function setStuNum($studentNumber){
    	$this->studentNumber = $studentNumber;
    }
}
