<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
echo '<p>Você não pode acessar essa pagina pq vc não esta logado</p>';
header('Location: ./index.php');
}

?>