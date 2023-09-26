<?php

require_once "Member.php";

$mem = new app\Member();

# reflectionProperty('class', 'Property you wanna test')
$rp = new ReflectionProperty('app\Member', 'detailInfo');

$rp->setAccessible(true);
echo $rp->getName() . "<br>";
showData($rp->getValue($mem));
echo "<hr>";

showData(get_class_methods($rp));

function showData($ary)
{
    echo "<pre>" .print_r($ary, true) . "</pre>";
}

?>