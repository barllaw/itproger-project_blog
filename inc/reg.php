<?php

require_once 'connect.php';

$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error;
if(strlen($email) < 4)
    $error = 'Введите Email!';
else if(strlen($login) < 4)
    $error = 'Введите логин!';
else if(strlen($pass) < 4)
    $error = 'Введите пароль!';
if($error != '' )
    exit($error);

$pass = md5($pass);

$sql = 'INSERT INTO `users`(email,login,pass) VALUES( ?, ?, ? ) ';
$query = $pdo->prepare($sql);
$query->execute([$email,$login,$pass]);

echo 'ok';

