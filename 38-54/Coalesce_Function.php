<?php

function doIt(...$var) 
{
    echo $var[0] ?? "Using coalesce to do sth!";
}

doIt();
?>