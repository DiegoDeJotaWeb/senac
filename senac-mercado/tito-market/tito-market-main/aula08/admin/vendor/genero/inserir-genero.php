<?php
include_once("../../../config/conexao.php");

$genero = $_POST['genero'];

$query = "INSERT INTO tbl_genero(nomeGenero)VALUES('$genero')";

$inserir_genero = mysqli_query($conexao,$query);

if($inserir_genero){
    echo "Cadastro efetuado com sucesso, <a href='../../index.php'>Voltar</a>";
    }else{
    echo "Erro ao cadastrar genero, <a href='../../cadastra-genero.php'>";
    }

?>