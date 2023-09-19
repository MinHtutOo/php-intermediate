<?php

$ary = ["One"=>1, "Two"=>2, "Three"=>3, "Four"=>4, "Five"=>"Testing"];

var_dump($ary);
echo "<hr>" . $ary["One"];
echo "<hr>";

$obj = (object) $ary;

var_dump($obj);

echo "<hr>" . $obj->One;

?>