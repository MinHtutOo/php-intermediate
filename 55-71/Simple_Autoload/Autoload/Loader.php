<?php

class Loader
{
    public static function loadMe($classname) {
        include_once $classname . ".php";
    }
}


?>