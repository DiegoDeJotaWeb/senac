<?php

include "./../config/_conecta.php";

if (count($_POST)>0){

    $query = "UPDATE livros SET isbn ='". $_POST['isbn'] . "', titulo= '" . $_POST['titulo'] . "', autor = '" . $_POST['autor'] . "', paginas = '" 
    . $_POST['paginas'] . "', preco = '" . $_POST['preco'] . "' WHERE isbn = '" . $_POST['isbn'] . "'";  
   

mysqli_query($conn, $query);

$mensagem = "Modificado com sucesso!";
}

echo $mensagem;

$result = mysqli_query($conn, "SELECT * FROM livros WHERE isbn = '" . $_POST['isbn'] . "'"); ?>