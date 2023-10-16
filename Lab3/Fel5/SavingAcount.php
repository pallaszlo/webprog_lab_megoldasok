<?php
namespace Fel5;
include "../Fel4/BancAccount.php";
use Fel4\BancAccount;


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

    public function addInterest(): void
    {
        // calculate interest
        $interest =  $this->getBalance() * $this->interestRate/100;
        // deposit interest to the balance
        $this->deposit($interest);
    }

}
