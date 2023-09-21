<?php
$num = 30;
$ary = ["1"=>"car", "2"=>"ship", "3"=>"airplane", "4"=>"train",];

array_walk($ary, function($val, $key) use (&$num)
{
    $num = ++$num;
    echo "Key is " . $key . " value is " . $val . " ,current value is {$num}<hr>";
});

?>