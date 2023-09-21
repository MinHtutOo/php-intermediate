<?php

function doIt(...$var) {
    echo $var[0] [2] . "<hr>";
    echo $var[1] . "<hr>";
    echo $var[2] [4];
}

doIt(["Apple", "Orange", "Mango", "Kiwi"], "What's up!", [1,2,3,4,5]);

?>