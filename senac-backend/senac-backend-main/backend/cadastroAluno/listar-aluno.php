<?php

include_once("conexao.php");
include_once("consultar-aluno.php");

$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$data_nasc = $_POST["data-nas"];
$genero = $_POST["genero"];

if($nome != "" && $sobrenome != "" && $data_nasc != "" && $genero != ""){

    $query = "INSERT INTO tbl_alunos(`nome`, `sobrenome`,`data_nascimento`, `genero`, `situacao`) VALUES ('$nome', '$sobrenome', '$data_nasc', '$genero', 'A')";

    $inserir = mysqli_query($conexao, $query);

        if($inserir){
            echo "cadastro efetuado com sucesso";
        }else{
            echo "Ops, não foi possivel cadastrar o aluno";
        };

}

