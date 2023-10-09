<?php

/* error
1. php.ini display_errors = Off
2. ini_set("display_errors", "Off")
3. error_reporting(0)
*/
// error_reporting(0);
include_once "../app/config/db.php";

/* FOR ERROR HANDLING
$name = "tester1";
$stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
$stmt->execute([
    "name" => $name
]);
$result = $stmt->fetch(PDO::FETCH_OBJ);
echo "<pre>" . print_r($result,true) . "</pre>";
*/

/* For SQL INJECTION 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
    $stmt->bindValue(":name", $name, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>". print_r($result,true) ."</pre>";
}else{
    echo $_GET['url'];
}   

// id = '' OR 1=1
// id= 100 `'UNION SELECT * FROM  users`'
// id = 1 ';DROP TABLE posts;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" id="name">
    <input type="submit" value="login">
</form>
*/
?>