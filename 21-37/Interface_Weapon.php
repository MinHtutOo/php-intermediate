<?php

interface Killer{
    public function setWeapon($weapon);
}

class Interface_Weapon implements Killer{

    private $weapon;

    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function killNow(){
        echo "Killing Enemy with " . $this->weapon; 
    }
}

$obj = new Interface_Weapon();
$obj->setWeapon("AWM");
$obj->killNow();

?>