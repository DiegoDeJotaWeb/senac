<?php

include_once("aula07.php");
include_once("cadastrar-aluno.php");

$consulta = mysqli_query($conexao, "SELECT * FROM tbl_alunos");
$dados_alunos = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

foreach($dados_alunos as $aluno){
    echo "<p>Nome: ".$aluno["nome"]."</p>";
    echo "<p>Sobrenome: ".$aluno["sobrenome"]."</p>";
}