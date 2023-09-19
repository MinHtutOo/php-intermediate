<?php

class Magic_Isset_Unset {
    public function __isset($name) {
        echo "I am trying to check setting the <span style='color:blue'>" 
        . $name . "</span> property<hr>";
    }

    public function __unset($name) {
        echo "I am trying to check unsetting the <span style='color:blue'>" 
        . $name . "</span> property<hr>";
    }

}

$obj = new Magic_Isset_Unset();
isset($obj->data);
unset($obj->dot);

?>