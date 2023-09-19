<?php

class Magic_Call_Callstatic{
    public function __call($method,$values) {
        echo "You are trying to call method {$method} with value of <hr>";
        echo "<pre>" . print_r($values) . "<pre>";
    }
    public static function __callStatic($name,$arguments) {
        echo "You are trying to call non_exist method {$name} with value of <hr>";
        echo "<pre>" . print_r($arguments,true) . "<pre><hr>";
    }
}
Magic_Call_Callstatic::hey("Bruce", "Chris", "Tom");

$obj = new Magic_Call_Callstatic();
$obj->hey("Bruce", "Chris", "Tom");

?>