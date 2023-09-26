<?php

require_once "Member.php";

$mem = new app\Member();

# reflectionmethod('class', 'method you wanna test')
$rm = new ReflectionMethod('app\Member', 'getDetailInfo');

$rm->isPublic();
echo $rm ? "It is public" : "It is not public";
echo "<br>";
echo $rm->invokeArgs($mem,["Konichiwa"]);
echo "<hr>";

showData(get_class_methods($rm));

function showData($ary)
{
    echo "<pre>" .print_r($ary, true) . "</pre>";
}

?>