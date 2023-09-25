<?php
namespace app\database;

class DBGen
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "restaurant";

    private $conn;

    public function  __construct()
    {
        $this->conn = new \mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);// host,username,pass,dbnam
    }

    public function getSingleShop($id){
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE id=?");
        $stmt->bind_param('i', $id);
        $result = $stmt->execute();
        $stmt->bind_result($id,$name,$ipadd,$username,$password,$state,$created_at);

        while($stmt->fetch()) {
            echo $id . "<br>" . $name . "<br>" . $ipadd . "<br>";
            echo $username . "<br>" . $password . "<br>" . $state . "<br>" . $created_at . "<hr>";
        }
    }

    public function getMultipleShop($state){
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param('i', $state);
        $result = $stmt->execute();
        $stmt->bind_result($id,$name,$ipadd,$username,$password,$state,$created_at);

        while($stmt->fetch()) {
            echo $id . "<br>" . $name . "<br>" . $ipadd . "<br>";
            echo $username . "<br>" . $password . "<br>" . $state . "<br>" . $created_at . "<hr>";
        }
    }

    public function getAllData()
    {
        $result = $this->conn->query("SELECT * FROM shops");
        while($row = $result->fetch_object()){
            echo $row->name . "<br>" . $row->ipadd . "<hr>";
        }
    }

    public function fetchAllShops($state)
    {
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param('i', $state);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all();

        echo "<pre>" . print_r($data, true) . "</pre>";
        foreach($data as $item) {
            echo $item[1] . "<br>";
        }
    }

    public function insertSingleShop($name,$ipadd,$user,$pass,$state)
    {
        $date = date("Y-m-d H:m:s");
        $stmt = $this->conn->prepare("INSERT INTO shops(name,ipadd,username,password,state,created_at)
                                VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssis", $name,$ipadd,$user,$pass,$state,$date);
        $result = $stmt->execute();

        echo $result ? "Insert Successfully." : "Insert Fail!";

    }

    public function insertMultipleShop($shops)
    {
        $date = date("Y-m-d H:m:s");
        $stmt = $this->conn->prepare("INSERT INTO shops(name,ipadd,username,password,state,created_at)
                                VALUES (?,?,?,?,?,?)");
        foreach($shops as $shop) {
            $stmt->bind_param("ssssis", $shop[0],$shop[1],$shop[2],$shop[3],$shop[4], $date);
            $result = $stmt->execute();
            $lastInsertId = $stmt->insert_id;
            echo "Successfully Insert " . $shop[0] . "with id of " . $lastInsertId . "<br>";
        }
        
        

        

    }

    public function updateShop($shopid,$name)
    {
        $stmt = $this->conn->prepare("UPDATE shops SET name=? WHERE id=?");
        $stmt->bind_param("si", $name,$shopid);
        $result = $stmt->execute();
        echo $result ? "Update SuccessFully." : "Update Fail!";
    }

    public function deleteShop($shopid)
    {
        $stmt = $this->conn->prepare("DELETE FROM shops WHERE id=?");
        $stmt->bind_param("i", $shopid);
        $result = $stmt->execute();
        echo $result ? "Delete Successfully." : "Delete Fail!";
    }

    public function getJoinData($state)
    {
        $stmt = $this->conn->prepare("SELECT
                od.id as order_id,
                sh.name as shop_name,
                dh.name as dish_name,
                (od.price * od.amount) as total,
                od.created_at as order_date
            FROM 
                orders as od
            LEFT JOIN
                shops as sh
            ON 
                sh.id = od.shopid
            INNER JOIN 
                dishes as dh
            ON 
                dh.id = od.dishid
            WHERE 
                od.state = ?
        ");
        $stmt->bind_param('i',$state);
        $result = $stmt->execute();
        $stmt->bind_result($orderid,$shopname,$dishname,$total,$oDate);
        while($stmt->fetch()) {
            echo $orderid . "<br>" . $shopname . "<br>" . $dishname . "<br>" . 
                $total . "<br>" . $oDate . "<hr>";
        }

    }
}

?>