<?php
$page_title = 'Регистрация';
require 'html/head.php';
require 'html/header.php'; 
?>
    <div class="container">
        

        <form class="form-signin" id="form-signin">
            <h2>Регистрация</h2>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input  type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

            <label for="inputLogin" class="sr-only">Login</label>
            <input  type="text" id="inputLogin" class="form-control" placeholder="Login" required="" autofocus="">

            <label for="inputPassword" class="sr-only">Password</label>
            <input  type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

            <button id="reg-btn" class="btn btn-lg btn-primary btn-block" type="button">Регистрация</button>
            
            <div id="error"></div>
        </form>
        

    </div>

<?php require 'html/footer.php'; ?>
