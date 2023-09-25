<?php

require_once "DB_Gen.php";

class DAL
{
    private  $db;

    public function __construct()
    {
        $this->db = DB_Gen::getInstance()->getConn();
    }

    public function getSingleShop($id) {
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $stmt->bindColumn("name", $name);
        $stmt->bindColumn("ipadd", $ipadd);
        $result = $stmt->fetchObject();

        echo $result->name . "<br>" . $result->ipadd;


    }

    public function getMultiShop($state) {
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE state=:state");
        $stmt->bindParam(":state", $state);
        $stmt->execute();
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach($result as $item) {
            // echo $item["name"] . "<br>";
            // echo $item["ipadd"] . "<br>";
            // echo $item["created_at"] . "<br>";
            // echo "<hr>";

            echo $item->name . "<br>";
            echo $item->created_at . "<br>";
            echo $item->ipadd . "<hr>";
        }
    }

    public function singleShopInsert($name,$ipadd,$username,$password,$state) 
    {
        $datty = date("Y-m-d  H:m:s");
        $stmt = $this->db->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
            VALUES (:name,:ipadd,:username,:password,:state,:created_at)
        ");

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":ipadd", $ipadd);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":state", $state);
        $stmt->bindParam(":created_at", $datty);

        $result = $stmt->execute();
        $insertId = $this->db->lastInsertId();

        echo $result ? "Success inserting " . $insertId : "Insert fail!";
    }

    public function multiShopInsert($shops) 
    {
        $datty = date("Y-m-d  H:m:s");
        $stmt = $this->db->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
            VALUE (:name,:ipadd,:username,:password,:state,:created_at)
        ");

        foreach($shops as $shop) {
            $stmt->bindParam(":name", $shop[0]);
            $stmt->bindParam(":ipadd", $shop[1]);
            $stmt->bindParam(":username", $shop[2]);
            $stmt->bindParam(":password", $shop[3]);
            $stmt->bindParam(":state", $shop[4]);
            $stmt->bindParam(":created_at", $datty);

            $result = $stmt->execute();
        $insertId = $this->db->lastInsertId();

        echo $result ? "Data " . $insertId . " insert successfully. <br>" : "Insert fail!";
        }

        
    }

    public function updateShop($id,$name) 
    {
        $stmt = $this->db->prepare("UPDATE shops SET name=:name WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":name",$name);
        $result = $stmt->execute();
        echo $result ? "Update Successully." : "Update Fail!";
    }

    public function deleteShop($id)
    {
        $stmt = $this->db->prepare("DELETE FROM shops WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $result = $stmt->execute();
        echo $result ? "Successfully deleted." : "Delete Fail!";
        
    }

    public function joinData($shopid)
    {
        $stmt = $this->db->prepare("SELECT
        sh.name as name,
        sh.ipadd as ipadd,
        SUM(od.price * od.amount) as total
        FROM 
            shops as sh
        LEFT JOIN
            orders as od
        ON 
            od.shopid = sh.id
        WHERE 
            sh.id=:id AND sh.state=1
        ");
        $stmt->bindParam(":id", $shopid);
        $stmt->execute();
        $stmt->bindColumn("name",$name);
        $stmt->bindColumn("ipadd",$ipadd);
        $stmt->bindColumn("total",$total);
        $result = $stmt->fetchObject();

        echo "Shop name is " . $result->name . "<br>";
        echo "Shop Ip address is " . $result->ipadd . "<br>";
        echo "Total sale " . $result->total . "<br>";

    }


}

?>