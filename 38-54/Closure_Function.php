<?php

$num = 30;

function doIt($var) {
    $var();
}

doIt(function() use($num) {
    echo $num;
});
?>