<?php
include_once("../../../config/conexao.php");

$situacao = $_POST['situacao'];

$query = "INSERT INTO tbl_situacao(situacao)VALUES('$situacao')";

$inserir_situacao = mysqli_query($conexao,$query);

if($inserir_situacao){
    echo "Cadastro efetuado com sucesso, <a href='../../index.php'>Voltar</a>";
    }else{
    echo "Erro ao cadastrar situação, <a href='../../cadastra-situacao.php'>";
    }

?>