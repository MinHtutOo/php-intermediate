<?php

function doIt($a,$b,$c){
    $total = $a + $b;
    $c($total);
}

doIt(3,2,function($var){
    echo "I am Lambda function! Total is {$var}";
});

?>