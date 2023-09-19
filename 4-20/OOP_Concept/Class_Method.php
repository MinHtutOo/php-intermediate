<?php

class Class_Method {
    var $name = "Bruce";
    public function fonkey($name){
        echo "I am fonkey method!" . $name;
    }
}

$obj = new Class_Method();
$obj -> fonkey("Method Lesson");
echo "<br>" . $obj -> name;

?>