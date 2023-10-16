<?php

namespace Lab4\Fel1;

class NonExistentOperation extends \Exception
{
    public function errorMessage()
    {
        return "Non existent operation!";
    }
}
