<?php

require_once "Autoload/Loader.php";

class Take
{
    public function __construct()
    {
        Loader::loadMe('Helper');
        $helper = new Helper("Peter");
        $helper->sayYourName();

        Loader::loadMe('Hello/Hi/Hi');
        $hi = new Hi();
        $hi->sayHi();

        Loader::loadMe('Hello/Hello');
        $hi = new Hello();
        $hi->sayHello();
        
    }
}

$obj = new Take();

?>