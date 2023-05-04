<?php

include('./../config/_conecta.php');
if($_POST['submit']){

$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$paginas = $_POST['paginas'];
$preço = $_POST['preco'];

var_dump($_POST);

$query = "INSERT INTO livros(isbn,titulo,autor,paginas,preco)VALUES($isbn,$titulo,$autor,$paginas,$preço)";

if($conn->query($query)){
    echo "Registro inserido com sucesso!";
}else{
    echo "Erro ao registrar";
}


}
