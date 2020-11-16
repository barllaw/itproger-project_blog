<?php

session_start();

if( !$_SESSION['id'] )
    header('location: /');

$page_title = 'Список пользователей';
require 'html/head.php';
require 'html/header.php';

require_once 'inc/connect.php';

$sql = "SELECT `id`,`login`,`email` FROM `users`";
$query = $pdo->query( $sql );
$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>
    <div class="container">
        <h2>Список пользователей</h2>
        <div id="status"></div>
        <div class="users-wrap mr-10">
                <?php
                    foreach( $users as $user ){
                        echo "<div class='user user$user[id]'>";
                        echo "<p><b>Логин: </b>$user[login], <b>Email: </b>$user[email]<button onclick='delete_user($user[id]);'>Delete</button></p>";
                        echo '</div>';
                    }
                ?>
            
        </div>
    </div>

<?php require 'html/footer.php'; ?>
