<?php

class Destructor {
    var $t = 0;

    public function __construct() {
        echo "Start working";
    }

    public function loopIt() {
        for($i = 0; $i < 20; $i++) {
            $this->t += $i;
        }
        echo "<br>" . "T value is " . $this->t . "<br>";
    }

    public function __destruct(){
        echo "End working";
    }
}

$obj = new Destructor();
$obj->loopIt();

?>