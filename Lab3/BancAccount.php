<?php

class BancAccount
{
    protected $accountNumber;
    protected $accountName;
    protected $balance;

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

    public function __toString(): string
    {
        return "Tulajdonos: " . $this->accountName . "<br>" .
                "Szamlaszam: " . $this->accountNumber . "<br>" .
                "Egyenleg: " . $this->balance . " RON" . "<br>";
    }
} //end class

$account = new BancAccount(100, "Kiss Balazs");
$account->setBalance(1000);
echo $account;
