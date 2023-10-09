<?php
session_start();
require_once "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST["_token"])) {
        if($_POST["_token"] == $_SESSION["_token"]) {
            $db = new DB();
            $result = $db->insert($_POST["name"],$_POST["email"],$_POST["comment"]);
            echo $result ? "Comment Insert Successfully" : "Comment Insert Fail";
        }else{
            echo "Token Problem";
        }
    }else{
        echo "Invalid CSRF Request";
    }
}

$_SESSION["_token"] = bin2hex(openssl_random_pseudo_bytes(16))
?>