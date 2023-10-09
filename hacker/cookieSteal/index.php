<?php
$date = new DateTime("+1 week");

$secret = password_hash("123123",PASSWORD_BCRYPT);

setcookie("token", $secret, $date->getTimestamp(), '/', null, null, true);

echo "hello";
?>