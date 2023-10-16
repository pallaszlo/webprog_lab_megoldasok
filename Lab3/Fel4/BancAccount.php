<?php
namespace Fel4;

class BancAccount
{
    protected int $accountNumber;
    protected string $accountName;
    protected float $balance;

    /**
     * @param $accountNumber
     * @param $accountName
     */
    public function __construct(int $accountNumber, string $accountName)
    {
        $this->accountNumber = $accountNumber;
        $this->accountName = $accountName;
        $this->balance = 0;
    }

    /**
     * @return int
     */
    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    /**
     * @param int $accountNumber
     */
    public function setAccountNumber(int $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * @return string
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }

    public function deposit($amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function __toString(): string
    {
        return "Owner: " . $this->accountName . "<br>" .
                "Account number: " . $this->accountNumber . "<br>" .
                "Balance: " . $this->balance . " RON" . "<br>";
    }
} //end class

