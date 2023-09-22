<?php
require_once "vendor/autoload.php";
use app\database\DBGen;

class Index
{
    private $db;
   
    public function __construct()
    {
        $shops = [
            ["Beef Town","192.168.0.107","beef town","123","1"],
            ["Sushi valley","192.168.0.107","sushi valley","123","1"],
            ["Food valley","192.168.0.107","food valley","123","1"],
            ["Steak town","192.168.0.107","steak town","123","1"],
            ["Bake It","192.168.0.107","bake it","123","1"]
        ];
       $this->db = new DBGen(); 
       // $this->db->getMultipleShop(1);
       // $this->db->getAllData();
       // $this->db->insertSingleShop("Foody World", "192.168.0.105","foody world", "123", 1);
       // $this->db->insertMultipleShop($shops);
       // $this->db->updateShop(6,"Yaki Niku");
       $this->db->deleteShop(8);
    }


}
$ans = new Index();

?>