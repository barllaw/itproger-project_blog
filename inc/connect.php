<?php

$db_user = 'root';
$db_pass = 'root';
$db_name = 'itproger';
$db_host = 'localhost';

$dns = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($dns, $db_user, $db_pass);