<?php

function fileReader($file)
{
    if(file_exists($file)){
        $h = fopen($file, 'r');
        $size = filesize($file);
        $data = fread($h , $size);

        echo $data;
    }else {
        throw new Exception("The file you are reading is not exist!");
    }
}

try {
    fileReader("hello.txt");
}catch(Exception $e) {
    echo $e->getMessage() . "<br>";
    echo $e->getCode() . "<br>";
    echo $e->getFile() . "<br>";
    echo $e->getTraceAsString() . "<br>";
    echo $e->getLine() . "<br>";
}

?>