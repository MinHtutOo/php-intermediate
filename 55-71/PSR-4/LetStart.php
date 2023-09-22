<?php
require_once "vendor/autoload.php";

use food\Apple;
use food\Middleware\Mango as Fruit;

class LetStart{
    public function __construct()
    {
       $apple = new Apple(); 
       $apple->eatApple();

       $mango = new Fruit();
       $mango->eatMango();

       $market = new food\market\Marketplace();
       $market->findFood();

       $applejuice = new juice\AppleJuice();
       $applejuice->drinkJuice();
    }
}

$ans = new LetStart();

?>