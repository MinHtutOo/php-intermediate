<?php

class Constructor {
    public function __construct ($para1,$para2,$para3) {
        echo "The result is " . ($para1+$para2+$para3);
    }
}

new Constructor(25,101,50);

?>