<?php

class Member {
    var $name = "Stefan";
    
    public function doIt() {
        echo "I am doing it.";
    }

    public function friendCount() {
        echo "I am counting your friends.";
    }
}

class Method_Overriding extends Member {
    public function friendCount() {
        $this->name = "Bob";
        echo "I am counting my friends by my own!" . $this->name;
    }
}

$obj = new Method_Overriding();
$obj->doIt();
echo "<br>";
$obj->friendCount();

?>