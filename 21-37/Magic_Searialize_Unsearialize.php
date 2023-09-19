<?php

$ary = [
    ["One", "Two", "Three", "Four"],
    ["One", "Two", "Three", "Four"],
    ["One", "Two", "Three", "Four"],
    ["One", "Two", "Three", "Four"]
];

$data = serialize($ary);
echo $data;
$normal = unserialize($data);
echo "<hr>";
echo "<pre>" . print_r($normal, true) . "</pre>";

?>