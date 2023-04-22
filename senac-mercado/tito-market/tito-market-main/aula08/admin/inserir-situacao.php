<?php
include_once("./../config/conexao.php");

$situacao = $_POST['situacao'];

$query = "INSERT INTO tbl_situacao(situacao)VALUES('$situacao')";

$inserir_situacao = mysqli_query($conexao,$query);

if($inserir_situacao){
    header("Location:gestao-situacao.php?msg=sucessocad");
    }else{
        header("Location:gestao-situacao.php?msg=errocad");
    }

?>