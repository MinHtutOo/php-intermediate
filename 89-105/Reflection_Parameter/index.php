<?php

require_once "Member.php";

$mem = new app\Member();

# reflectionParameter(['class', 'Parameter you wanna test'], index)
$rp = new ReflectionParameter(['app\Member', 'getDetailInfo'],1 );

echo $rp->getName() . "<br>";
echo $rp->getPosition() . "<br>";
echo $rp->isDefaultValueAvailable() ? $rp->getDefaultValue() : "No default value";
echo "<hr>";

showData(get_class_methods($rp));

function showData($ary)
{
    echo "<pre>" .print_r($ary, true) . "</pre>";
}

?>