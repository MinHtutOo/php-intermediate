<?php

class Static_NonStatic {
    public static $count = 0;

    public function showMe() {
        echo self::doIt();
    }
    
    public static function doIt() {
        echo "Hello";
    }
}

Static_NonStatic::showMe();


?>