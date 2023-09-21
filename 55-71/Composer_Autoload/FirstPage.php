<?php
require_once "vendor/autoload.php";

class FirstPage
{
    public function __construct()
    {
        $start = new Start();
        $start->sayStartName();

        $home = new Home();
        $home->sayHomeName();

        $filter = new Filter();
        $filter->sayFilterName();

        $helper = new Help();
        $helper->sayHelpName();

    }

}

$obj = new FirstPage();

?>