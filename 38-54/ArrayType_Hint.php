<?php

class ArrayType_Hint
{
    public function acceptType(array $num) {
        var_dump($num);
    }
}

$type = new ArrayType_Hint();
$type->acceptType(["one"=>"Apple", "Two"=>"Orange", "Three"=>"Mango"]);

?>