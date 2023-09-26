<?php

class MyCustomException extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
        $h = fopen("log.txt", 'a');
        $data =  "\n\nError Message => \n " . $message . "\nError Code => \n " . 
            $code . "\nError Timestamp => \n " . date("Y-m-d H:i:s", time());
        fwrite($h, $data);
        fclose($h);
    }
}

function readMyFile($file){
    if(!file_exists($file))
        throw new MyCustomException("File not Found! Report by my custom exception class.", 1000);
}

try {
    readMyFile("hh.txt");
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
    echo $e->getCode();
}

?>