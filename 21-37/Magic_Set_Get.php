<?php

class Magic_Set_Get {

    // public function __get($var) {
    //     echo "You are trying to get non-exist property {$var} <hr>";
    // }

    public function __set($var, $value) {
        echo "You are trying to set non-exist property {$var} wih value of {$value} <hr>";
    }
}

$obj = new Magic_Set_Get();
// echo $obj->name;
echo $obj->name = "Bruce";

?>