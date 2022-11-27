<?php
include "BancAccount.php";

class SavingAcount extends BancAccount
{
    private $interestRate;

    public function __construct(int $accountNumber, string $accountName, float $interestRate)
    {
        parent::__construct($accountNumber, $accountName);
        $this->interestRate = $interestRate;
    }

    public function calcInterest(): float
    {
        return $this->balance + $this->balance * $this->interestRate / 100;
    }
}
