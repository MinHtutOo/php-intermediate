<?php

class Static_Modifier {
    private static $count = 0;

    public function getCount(){
        self::$count++;
        echo self::$count . "<br>";
    }
}

$obj = new Static_Modifier();
$obj->getCount();
$obj->getCount();

echo "<hr>";

$a = new Static_Modifier();
$a->getCount();
$a->getCount();

?>