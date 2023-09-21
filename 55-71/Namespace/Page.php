<?php
require_once "app/Rock.php";
require_once "Pop.php";
require_once "app/Middleware/Jazz.php";
require_once "app/Middleware/Classical.php";

use app\Rock;
use app\Middleware\Calssical as Classic;

class Page{
    public function __construct()
    {
       $rock = new Rock(); 
       $rock->sayRock();

       $pop = new Pop();
       $pop->sayPop();

       $jazz = new app\Middleware\Jazz();
       $jazz->sayJazz();

       $classic = new Classic();
       $classic->sayClassic();
    }
}

$ans = new Page();

?>