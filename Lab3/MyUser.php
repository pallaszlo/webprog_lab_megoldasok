<?php

class MyUser {

    private $vezNev;
    private $kerNev;
    private $szulEv;
    static private $minKor = 14;

    function __construct($vez, $kerNev, $szulEv) {
        $this->vezNev = $vez;
        $this->kerNev = $kerNev;
        $this->szulEv = $szulEv;
    }

    function teljesNev() {
        return $this->vezNev . " " . $this->kerNev;
    }

    function kor() {
        return date("Y") - $this->szulEv;
    }

    function koszont() {
        print("Szia " . $this->teljesNev() . "!");
    }

    static function setMinKor($kor) {
        self::$minKor = $kor;
    }

    function elegIdos() {
        return $this->kor() >= self::$minKor;
    }

    public function __destruct() {
        echo "<br>By, by!";
    }

    public function __toString() {
        return $this->vezNev . ' ' . $this->kerNev . ' ' . $this->szulEv;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {

    }

    /**
     * @return mixed
     */
    public function getSzulEv()
    {
        return $this->szulEv;
    }


}

?>
