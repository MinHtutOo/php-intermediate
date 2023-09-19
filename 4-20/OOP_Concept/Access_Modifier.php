<?php

// public => anyone can access
// private => only accessible inside class
// protectec => only accessible by member class

class Access_Modifier {
    public $name = "Bruce";
}

$obj = new Access_Modifier();
echo $obj -> name;

?>