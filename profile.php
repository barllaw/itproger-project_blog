<?php
session_start();

if( !$_SESSION['id'] )
    header('location: /');
    
$page_title = 'Профиль';
require 'html/head.php';
require 'html/header.php'; 
?>

    <div class="container">
        <h1>Профиль</h1>
        <p>
            <b>Логин: </b>
            <?=$_SESSION['login'];?>
        </p>
        <p>
            <b>Email: </b>
            <?=$_SESSION['email'];?>
        </p>
        <p>
            <a href="inc/exit.php">Выйти</a>
        </p>
    </div>
    <div class="album py-5 bg-light">
    <div class="container">



<?php require 'html/footer.php'; ?>
