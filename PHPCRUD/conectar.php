<?php

$db_name = 'usuario';
$db_host='localhost';
$db_user = 'root';
$db_password = '';

$pdo = new PDO("mysql:db_name=".$db_name.";host=".$db_host, $db_user, $db_password);



?>