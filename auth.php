<?php
session_start();
$page_title = 'Авторизация';
require 'html/head.php';
require 'html/header.php'; 
?>
    <div class="container">
        <form class="form-signin" id="form-signin">
            <h2>Авторизация</h2>

            <label for="inputLogin" class="sr-only">Login</label>
            <input value="login"  type="text" id="inputLogin" class="form-control" placeholder="Login" required="" autofocus="">

            <label for="inputPassword" class="sr-only">Password</label>
            <input  value="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

            <button id="auth-btn" class="btn btn-lg btn-primary btn-block" type="button">Войти</button>
            
            <div id="error"></div>
        </form>
    </div>

<?php require 'html/footer.php'; ?>
