<?php

class ReturnType
{
    public function showResult(string $num) : int
    {
        // return "One";
        return $num;
    }
}

$type = new ReturnType();
$ans = $type->showResult(20);
var_dump($ans);
?>