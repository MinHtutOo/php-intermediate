<?php

class ScalarType_Hint
{
    public function acceptType(int $num) {
        var_dump($num);
    }
}

$type = new ScalarType_Hint();
$type->acceptType(10);

?>