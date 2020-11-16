<?php
session_start();
require_once 'connect.php';

$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));

$error;
if(strlen($login) < 4)
    $error = 'Введите логин!';
else if(strlen($pass) < 4)
    $error = 'Введите пароль!';

if($error != '' )
    exit($error);

$pass = md5($pass);

$sql = "SELECT * FROM `users` WHERE `login` = ? and `pass` = ? ";
$query = $pdo->prepare( $sql );
$query->execute([$login,$pass]);
$user = $query->fetch(PDO::FETCH_ASSOC);

if( !$user )
    exit('Такого пользователя не найдено!');
else{
    foreach($user as $key => $val){
        $_SESSION[$key] = $val;
    }
    exit('ok'); 
}
