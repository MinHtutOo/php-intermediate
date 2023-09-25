<?php

class DB_Gen
{
    const DB_HOST = "localhost";
    const DB_NAME = "restaurant";
    const DB_USER = "root";
    const DB_PASS = "";
    private $conn;

    private static $instance;

    private function __construct()
    {
        try{
            // new PDO(host;dbname,dbuser,dbpass);
            $this->conn = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME , self::DB_USER, self::DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            if($this->conn) {
                echo "Database connect Successfully! <br>";
            }
        }
        catch(Exception $e) {
            echo "Custom error is <br>" . $e->getMessage();
        }
    }

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new DB_Gen();
        }
        return self::$instance;
    }

    public function getConn() {
        return $this->conn;
    }
}

?>