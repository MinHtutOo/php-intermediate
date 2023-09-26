<?php

class MyErrorClass extends Exception
{

}

function myErrorHandler($errorCode,$errorMessage,$file,$lineNum)
{
    echo "Error Code is " . $errorCode . "<br>";
    echo "Error message is " . $errorMessage . "<br>";
    echo "Error File is " . $file . "<br>";
    echo "Error Line Number is " . $lineNum . "<hr>";
    throw new MyErrorClass($errorMessage,$errorCode);
}

set_error_handler("myErrorHandler");

try{
    include "Hello.php";
}catch(Exception $e) {
    echo $e->getMessage(). "<br>";
    echo $e->getCode(). "<br>";
}

?>