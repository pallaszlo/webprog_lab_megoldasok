<?php

//namespace Temp;

class User
{
    private string $vezNev;
    private string $kerNev;
    private int $szulEv;
    static private int $minKor = 14;

    /**
     * @param $vezNev
     * @param $kerNev
     * @param $szulEv
     */
    public function __construct(string $vezNev, string $kerNev, int  $szulEv)
    {
        $this->vezNev = $vezNev;
        $this->kerNev = $kerNev;
        $this->szulEv = $szulEv;
    }

    /**
     * @return mixed
     */
    public function getVezNev(): string
    {
        return $this->vezNev;
    }

    /**
     * @param mixed $vezNev
     */
    public function setVezNev($vezNev): void
    {
        $this->vezNev = $vezNev;
    }

    /**
     * @return mixed
     */
    public function getKerNev(): string
    {
        return $this->kerNev;
    }

    /**
     * @param mixed $kerNev
     */
    public function setKerNev($kerNev): void
    {
        $this->kerNev = $kerNev;
    }

    /**
     * @return int
     */
    public static function getMinKor(): int
    {
        return self::$minKor;
    }

    /**
     * @return int
     */
    public function getSzulEv(): int
    {
        return $this->szulEv;
    }


    /**
     * @param int $minKor
     */
    public static function setMinKor(int $minKor): void
    {
        self::$minKor = $minKor;
    }

    public function __toString(): string
    {
        return $this->vezNev . " " . $this->kerNev . " ". $this->szulEv;
    }

    public function __destruct()
    {
        //echo "<br>By, by!";
    }
}

/*
$user1 = new User("Kiss", "Lajos", 2000);
echo $user1;
//$user1->vezNev = "Valaki";
User::setMinKor(16);
echo "<br>" . User::getMinKor();
*/
