<?php
 
 class Magic_Sleep_Wakeup {
    public function __sleep() {
        echo "You are going to serialize my object!<hr>";
        return [];
    }
    public function __wakeup()
    {
        echo "You are going to deserialize the object.";
    }
 }

 $obj = new Magic_Sleep_Wakeup();
 $serial = serialize($obj);
 $unserial = unserialize($serial);

?>