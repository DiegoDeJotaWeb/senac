<?php

include_once("conexao.php");

$id = $_POST["cod_aluno"];

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_nasc = $_POST["data_nascimento"];


$query = "UPDATE tbl_alunos SET nome = '$nome', sobrenome = '$sobrenome' , data_nascimento = '$data_nasc' WHERE cod_aluno = $id";

$atualizar = mysli_query($conexao, $query);

if($atualizar){
    echo "Dados Atualizados com sucesso , <a href='listar-aluno.php'>Voltar</a>";
}else{
    echo "Erro ao Atualizar os dados doaluno, <a href='editar-aluno.php?id=$id'>Voltar</a>";
}