<?php
include_once("./../config/conexao.php");

$genero = $_POST['genero'];

$query = "INSERT INTO tbl_genero(nomeGenero)VALUES('$genero')";

$inserir_gestao = mysqli_query($conexao,$query);

if($inserir_gestao){
    header("Location:gestao-genero.php?msg=sucessocad");
    }else{
        header("Location:gestao-genero.php?msg=errocad");
    }

?>