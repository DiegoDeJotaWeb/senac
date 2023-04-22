<?php

include_once("../config/conexao.php");

$genero = $_POST["genero"];
$id = $_POST["id"];

$query = "INSERT INTO tbl_generos(genero, id) VALUES ('$genero', '$id')";
$inserir_genero = mysqli_query($conexao, $query);

if($inserir_genero){
    echo "correto";
}else{
    echo "errado";
}