<?php

$password = "123123";

$hashpass = password_hash($password, PASSWORD_DEFAULT, ['cost'=>5]);

echo $hashpass;

?>