<?php
include_once("../conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNasc = $_POST['dataNasc'];
$genero = $_POST['genero'];
$newsletter = $_POST['newsletter'];


$query = "INSERT INTO tbl_clientes(nomeCliente,sobrenomeCliente,dataNascimentoCliente,newsletter,generoID,situacao,)VALUES('$nome','$sobrenome','$dataNasc','$newsletter',$genero,1)";

$inserir_categoria = mysqli_query($conexao,$query);

if($inserir_categoria){
    echo "Cadastro efetuado com sucesso, <a href='cadastra-categoria.php'>Voltar</a>";
    }else{
    echo "Erro ao cadastrar categoria, <a href='cadastra-categoria.php'>";
    }

?>