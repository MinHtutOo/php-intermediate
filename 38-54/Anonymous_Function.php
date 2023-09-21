<?php

$num = 20;

$vis = function($data){
    $data =50;
    echo "I am anonymous function! Data is {$data}";
};
echo $num . "<hr>";
$vis($num);
echo "<hr>" . $num;

?>