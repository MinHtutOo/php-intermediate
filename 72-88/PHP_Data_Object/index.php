<?php

require_once "database/DAL.php";

class Index
{
    public function __construct()
    {
        
        // $db = DB_Gen::getInstance()->getConn();
        // var_dump($db);

        // $db1 = DB_Gen::getInstance()->getConn();
        // var_dump($db1);

        // $db2 = DB_Gen::getInstance()->getConn();
        // var_dump($db2);

        $dal = new DAL();
        $shops = [
            ["KFC","192.168.0.108","kfc","123","1"],
            ["Sushi House","192.168.0.104","sushi house","123","1"],
            ["Bonchon","192.168.0.105","bonchon","123","1"]
        ];
        // $dal->getSingleShop(5);
        // $dal->getMultiShop(1);
        // $dal-> multiShopInsert($shops);
        // $dal->updateShop(1,"Bonchon");
        // $dal->deleteShop(7);
        $dal->joinData(1);

    }
}

$a = new Index();

?>