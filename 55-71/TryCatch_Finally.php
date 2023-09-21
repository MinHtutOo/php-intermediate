<?php

error_reporting(0);

function MyErrorHandler()
{
    throw new Exception("File not found!");
}

set_error_handler("MyErrorHandler");

try {
    fopen ('text.txt', 'r');
}catch(Exception $p){                           
    echo $p->getMessage();
}finally {
    echo "<br>Build new txt file or check the file name.";
}

?>