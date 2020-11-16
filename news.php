<?php
session_start();

if( !$_SESSION['id'] )
    header('location: /');

require_once 'inc/connect.php';

$id = $_GET['id'];

$sql = 'SELECT * FROM `articles` WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);
$article = $query->fetch(PDO::FETCH_OBJ);

$page_title = "$article->title";
require 'html/head.php';
require 'html/header.php'; 

$months = [
    'Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря'
];

$date = date('d ', $article->date);
$date .= $months[date('n', $article->date) - 1];
$date .= date(' H:i', $article->date);

?>



<div class="container">

  <h2><?=$article->title?></h2>
  <p><?=$article->intro?></p>
  <p><?=$article->text?></p>
  <p><span><?=$date?> </span> Автор: <b><?=$article->author?> </b></p>

  <h3 class="mt-5">Comments</h3>

  <form action="/news?id=<?=$id?>" method="post" class="form-signin" id="form-signin">

    <label for="inputPassword" class="sr-only">Comment</label>
    <textarea class="form-control" name="comment" id="comment" ></textarea>

    <button id="comment-btn" class="btn btn-lg btn-primary btn-block mt-2" type="submit">Оставить коментарий</button>
      
    <div id="error"></div>
  </form>
  <?php

  if($_POST['comment'] != ''){
    $user = trim(filter_var($_SESSION['login'], FILTER_SANITIZE_STRING));
    $comment = trim(filter_var($_POST['comment'], FILTER_SANITIZE_STRING));

    $sql = 'INSERT INTO `comments`(user, comment, artc_id) VALUES (?,?,?)';
    $query = $pdo->prepare($sql);
    $query->execute([$user,$comment, $id]);
  }

  $sql = "SELECT * FROM `comments` WHERE `artc_id` = $id ORDER BY `id` DESC";
  $query = $pdo->query($sql);
  
  while($row = $query->fetch(PDO::FETCH_OBJ)){
    echo "
      <div class='alert alert-info'>
      <h6>$row->user</h6>    
      <p>$row->comment</p>
      </div>    
    ";
  }

?>
</div>



<?php require 'html/footer.php'; ?>
