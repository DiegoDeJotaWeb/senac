<?php

include_once("dados-alunos.php");

$ra = $_GET["ra"];

foreach($dados_alunos as $aluno){
    if($aluno["ra"] == $ra){
        echo "<p>RA: ".$aluno["ra"]."</p>";
        echo "<p>Nome completo: ".$aluno["nome"]."</p>";
        echo "<p>Telefone: ".$aluno["telefone"]."</p>";
        echo "<p>E-mail: ".$aluno["email"]."</p>";
        echo "<p>Nível Ensino: ".$aluno["tipo_ensino"]."</p>";
        echo "<p>Curso: ".$aluno["curso"]."</p>";
        echo "<p><a href='lista-alunos.php'>Voltar</a></p>";
    }
}