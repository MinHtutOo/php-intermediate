<?php

class Databinding_Intro {

    public function className() {
        return __CLASS__;
    }

    public function doIt() {
        echo static::className() . "<hr>";
    }
}

class Second extends Databinding_Intro {
    public function className() {
        return __CLASS__;
    }
}

$one = new Databinding_Intro();
$one->doIt();

$two = new Second();
$two->doIt();

?>