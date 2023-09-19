<?php

class Setter_Getter {
    private $name = "Bruce";

    public function setter($data) {
        $this->name = $data;
    }

    public function getter() {
        return $this->name;
    }
}

$obj = new Setter_Getter();
$obj->setter("Set name to Chris");
echo $obj->getter();

?>