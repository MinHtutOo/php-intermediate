<?php

class This_Variabe {
    public $name = "Chris";

    public function changeName() {
        $this->name = "Bruce";
    }
}

$obj = new This_Variabe();
$obj->changeName();
echo $obj->name . "<br>";

$bb = new This_Variabe();
echo $bb->name;

?>