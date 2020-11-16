<?php
require_once 'connect.php';

$message = trim(filter_var($_POST['message'], FILTER_SANITIZE_STRING));

$error;
if( $message == '')
    exit('error');


$sql = 'INSERT INTO `messenger`(mess) VALUES(:mess) ';
$query = $pdo->prepare($sql);
$query->execute(['mess' => $message]);

echo "<div id='mess' class='mess'>$message</div>";