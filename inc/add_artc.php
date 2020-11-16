<?php
session_start();
require_once 'connect.php';

$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
$intro = trim(filter_var($_POST['intro'], FILTER_SANITIZE_STRING));
$text = trim(filter_var($_POST['text'], FILTER_SANITIZE_STRING));
$author = $_SESSION['login'];
$time = time();

$error;
if(strlen($title) < 10)
    $error = 'Введите загаловок!';
else if(strlen($intro) < 20)
    $error = 'Введите интро!';
else if(strlen($text) < 30)
    $error = 'Введите текст!';
if($error != '' )
    exit($error);

$sql = 'INSERT INTO `articles`(title,intro,text,author,date) VALUES( ?, ?, ?, ?, ? ) ';
$query = $pdo->prepare($sql);
$query->execute([$title,$intro,$text,$author,$time]);

echo 'ok';