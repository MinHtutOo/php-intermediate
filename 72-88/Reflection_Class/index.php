<?php

require_once "Member.php";

$member = new app\Member();

$rc = new ReflectionClass('app\Member');

echo $rc->getName() . "<br>";
echo $rc->getShortName() . "<br>";
echo $rc->getNamespaceName() . "<br>";
echo $rc->hasMethod('getDetailInfo') . "<br>";

showData(get_class_methods($rc));

function showData($ary)
{
    echo "<pre>" .print_r($ary, true) . "</pre>";
}

?>