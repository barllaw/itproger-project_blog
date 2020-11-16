<?php
require_once 'connect.php';

$sql = 'SELECT `mess` FROM `messenger`';
$query = $pdo->query($sql);
$messages = $query->fetchAll(PDO::FETCH_ASSOC);
if($messages){
    foreach($messages as $item){
        echo "<div id='mess' class='mess'>$item[mess]</div>";
    }    
}else{
    echo "empty";
}