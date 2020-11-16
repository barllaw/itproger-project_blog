<?php

$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$login = $_SESSION['login'];
$message = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

$error;
if(strlen($email) < 4)
    $error = 'Введите Email!';
else if(strlen($message) < 4)
    $error = 'Введите сообщение!';
if($error != '' )
    exit($error);

$my_email = 'test@mail.com';
$subject = '=?utf-8?B?'.base64_encode('Новое сообщение с сайта').'?=';
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

mail($my_email, $subject, $message, $headers);

echo 'ok';

