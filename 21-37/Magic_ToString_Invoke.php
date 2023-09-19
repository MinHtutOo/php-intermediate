<?php

class Magic_ToString_Invoke {

    public function __toString()
    {
        return "This class have no properties or method!<br>";
    }

    public function __invoke()
    {
        echo "You are tryinng to call object as Method";
    }
}

$obj = new Magic_ToString_Invoke();
echo $obj;
echo $obj();

?>