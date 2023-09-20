<?php

abstract class First
{
    public $name = "Steven";

    public abstract function myAbs();

    public abstract function sayHello();

    public function doIt(){
        echo "I am doing it.";
    }
}

class AbstractIntro extends First
{
    public function myAbs() {
        echo "Hello I am abstract method.<hr>";
    }

    public function sayHello(){
        echo "hello.<hr>";
    }

    public function doIt(){
        echo "He is dong it.<hr>";
    }
}

$obj = new AbstractIntro();
$obj->myAbs();
$obj->sayHello();
$obj->doIt();

?>