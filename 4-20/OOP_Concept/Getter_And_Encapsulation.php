<?php

class Getter_And_Encapsulation {
    private $name = "Bruce";

    public function getter() {
        return $this->name;
    }
}

$obj = new Getter_And_Encapsulation();
echo $obj->getter();

?>