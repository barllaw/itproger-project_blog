<?php
session_start();

if( !$_SESSION['id'] )
    header('location: /');

$page_title = 'Добавить статью';
require 'html/head.php';
require 'html/header.php';
require_once 'inc/connect.php';

$sql = "SELECT `id`,`login`,`email` FROM `users`";
$query = $pdo->query( $sql );
$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>
    <div class="container">
        <h2>Добавить статью</h2>
        <div class="container">
            <form class="form-signin" id="form-signin">

                <label for="title" class="sr-only">Login</label>
                <input type="text" id="title" class="form-control" placeholder="Title" required="" autofocus="">

                <label for="intro" class="sr-only">Login</label>
                <input type="text" id="intro" class="form-control" placeholder="Intro" required="" autofocus="">

                <label for="text" class="sr-only">Password</label>
                <textarea name="text" id="text" class="form-control" placeholder="Text"></textarea>

                <button id="add_artc-btn" class="btn btn-lg btn-primary btn-block mt-2" type="button">Добавить</button>
                
                <div id="error"></div>
            </form>
        </div>
    </div>

<?php require 'html/footer.php'; ?>
