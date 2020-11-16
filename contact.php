<?php
session_start();

if( !$_SESSION['id'] )
    header('location: /');

$page_title = 'Регистрация';
require 'html/head.php';
require 'html/header.php'; 
?>
    <div class="container">
        

        <form class="form-signin" id="form-signin">
            <h2>Обратная связь</h2>

            <label for="email" class="sr-only">Email</label>
            <input  type="text" id="email" class="form-control" placeholder="Email" required="" autofocus="">

            <label for="message" class="sr-only">Password</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>

            <button id="callback-btn" class="btn btn-lg btn-primary btn-block mt-3" type="button" >Отправить</button>
            
            <div id="error"></div>
        </form>
        

    </div>

<?php require 'html/footer.php'; ?>
