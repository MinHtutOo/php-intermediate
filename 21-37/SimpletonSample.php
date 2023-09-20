<?php

class SimpletonSample
{
    private static $name = "William";
    
    private static $instance;

    private function __construct(){
        self::$name = "Jonathan";
    }

    public static function getInstance(){
        if(self::$instance == null) {
            self::$instance = new SimpletonSample();
        }
        return self::$instance;
    }

    public function getName(){
        return self::$name;
    }
}

$ans = SimpletonSample::getInstance();
echo $ans->getName();

?>