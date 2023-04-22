<?php

include('header.php');
include('dados-usuarios.php');
include('dados-carrinho.php');

$id = $_GET['id'];

foreach ($dados_carrinho as $carrinho) {
    if($id = $carrinho['id']){
        echo "<pre>";
        echo $carrinho['id'];
        echo "</pre>";


    }
}




include('footer.php');
?>