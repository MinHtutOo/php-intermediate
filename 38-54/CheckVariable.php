<?php

class CheckVariable
{
    public function showResult($num)
    {
        if(is_int($num)){
            echo "Your passing argument is Integer.";
        }else {
            exist("We need integer type variable!");
        }
    }
}

$obj = new CheckVariable();
$obj->showResult(10);

?>