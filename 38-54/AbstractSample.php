<?php

abstract class First
{
    public $name = "Steven";

    public abstract function sayHello();

    public function doIt(){
        echo "I am doing it.";
    }
}

abstract class Second extends First
{
    public $sName = "Lucy";
}

class AbstractSample extends Second
{
    public function sayHello(){
        echo "hello.<hr>";
    }

    public function doIt(){
        echo "He is dong it.<hr>";
    }
}

$obj = new AbstractSample();
$obj->sayHello();
$obj->doIt();
echo $obj->sName;

?>