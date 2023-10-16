<?php

namespace Lab4\Fel2;

class Student
{
    private int $id;
    private string $firstName;
    private string $lastName;

    /**
     * @param int $id
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(int $id, string $firstName, string $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }


    public function __destruct()
    {
        //echo sprintf("Student with SSN# %s is terminated.<br>", $this->ssn);
    }

    public function __toString()
    {
        return sprintf("ID: %d, Name: %s, %s<br>", $this->id, $this->lastName, $this->firstName);
    }

    public function __clone()
    {
        echo 'Copying object <br>';
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

}

