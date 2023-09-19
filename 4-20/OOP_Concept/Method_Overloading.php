<?php

class Method_Overloading {
    public function doIt($default=18) {
        echo "I am " . $default;
    }
}

$obj = new Method_Overloading();
$obj -> doIt(20);

?>