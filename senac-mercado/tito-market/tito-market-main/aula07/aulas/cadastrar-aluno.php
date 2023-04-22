<?php

include_once("aula07.php");
include_once("consultar-aluno.php");

$query = "INSERT INTO tbl_alunos(`nome`, `sobrenome`,`data_nascimento`, `genero`, `situacao`) VALUES ('Marcelo', 'Nascimento', '07/01/2006', 'M', 'A')";

$inserir = mysqli_query($conexao, $query);

if($inserir){
    echo "cadastro efetuado com sucesso";
}else{
    echo "Ops, não foi possivel cadastrar o aluno";
};