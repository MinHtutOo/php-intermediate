<?php

interface GameRules{
    public function createGameScene();
    public function createVegetables();
    public function createHousing();
    public function createAnimals();
}

class InterfaceIntro implements GameRules{
    public function createGameScene(){
        echo "Hello I am create scene<br>";
    }
    public function createVegetables(){
        echo "Hello I am create vegetable<br>";
    }
    public function createHousing(){
        echo "Hello I am create housing<br>";
    }
    public function createAnimals(){
        echo "Hello I am create actor<br>";
    }
}

$game = new InterfaceIntro();
$game->createGameScene();
$game->createVegetables();
$game->createHousing();
$game->createAnimals();
?>