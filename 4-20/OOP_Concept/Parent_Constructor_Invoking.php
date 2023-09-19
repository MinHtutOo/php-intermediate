<?php

class Member {
    var $name = "Bruce";
    public function __construct() {
        echo "Parent start working!<br>";
    }
}
class Parent_Constructor_Invoking extends Member {

    var $mine = "Hello!";
    public function __construct() {
        parent::__construct();
        echo "Child start working!<br>";
    }
}

$obj = new Parent_Constructor_Invoking();
echo $obj->name;
echo "<br>" . $obj->mine;

?>