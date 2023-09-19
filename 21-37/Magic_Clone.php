<?php

class Magic_Clone {
    public function __clone() 
    {
        echo "You are cloning me!<br>";
    }
}

$obj = new Magic_Clone();
$c = clone $obj;

?>