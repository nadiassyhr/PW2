<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    //override
    public function ucapSalam()
    {
        echo "Hello my name is nadia" . $this->nama . "<br>";
    }

}