<?php

include_once("../config/conexao.php");

$situacao = $_POST["situacao"];
$id = $_POST["id"];

$query = "INSERT INTO tbl_situacao(situacao, id) VALUES ('$situacao', '$id')";
$inserir_situacao = mysqli_query($conexao, $query);

if($inserir_situacao){
    echo "Correto";
}else{
    echo "Errado";
}