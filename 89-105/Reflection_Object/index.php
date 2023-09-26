<?php

require_once "Member.php";

$mem = new app\Member();

# reflectionObject(obj yoou wanna test)
$ro = new ReflectionObject($mem);

echo $ro->getName(). "<br>";
echo $ro->getShortName(). "<br>";
echo $ro->hasMethod('setAuth') . "<br>";
echo $ro->getStartLine() . "<br>";
echo $ro->getEndLine() . "<br>";
echo "<hr>";

showData(get_class_methods($ro));

function showData($ary)
{
    echo "<pre>" .print_r($ary, true) . "</pre>";
}

?>