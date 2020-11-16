<?php

require_once 'connect.php';

$id = $_POST['id'];

$sql = "DELETE FROM `users` WHERE `id` = ? ";
$query = $pdo->prepare( $sql );
$query->execute([$id]);

echo 'ok';