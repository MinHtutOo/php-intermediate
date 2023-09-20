<?php

class DataBinding
{
    public static $name = "Bruce";

    public static function authorName() {
        return self::$name;
    }

    public static function getAuthorName(){
        echo static::authorName();
    }
}

class Test extends DataBinding
{
    public static function authorName() {
        return self::$name . " and Chris.";
    }
}

DataBinding::getAuthorName();
echo "<hr>";
Test::getAuthorName();
?>