<?php

class Member {
    var $name = "Stefan";
    var $age = 20;
    var $subject = "History";

    public function friendCount() {
        echo "I am friend count method";
    }
}

class Simple_Inheritance extends Member {

}

$obj = new Simple_Inheritance();
echo $obj->name . "<br>";
$obj->friendCount();

?>