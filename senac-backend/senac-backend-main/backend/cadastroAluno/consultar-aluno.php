<?php

include_once("conexao.php");

$consulta = mysqli_query($conexao, "SELECT * FROM tbl_alunos");
$dados_alunos = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

echo "
<style>
    i{
        margin: 0px 5px;
    }
    i:hover{
        cursor: pointer;
    }
    table, th, td{
        border: 1px solid black;
        text-align: center;
    }
</style>
<table>
<thead>
<tr>
    <th>RA</th>
    <th>Nome</th>
    <th>Sobrenome</th>
    <th>Data Nascimento</th>
    <th>Genero</th>
    <th>Situação</th>
    <th>Ação</th>
</tr>
</thead>
<tbody>";

foreach($dados_alunos as $aluno){
    echo "
        
            <tr>
                <td>".$aluno["cod_aluno"]."</td>
                <td>".$aluno['nome']."</td>
                <td>".$aluno['sobrenome']."</td>
                <td>".$aluno['data_nascimento']."</td>
                <td>".$aluno['genero']."</td>
                <td>".$aluno['situacao']."</td>
                <td>
                <a href='excluir-aluno.php?id=".$aluno['cod_aluno']."'><i class='fa-solid fa-trash'></i></a>
                <a href='editar-aluno.php?id=".$aluno['cod_aluno']."'><i class='fa-solid fa-pencil'></i></a>
                </td>
            </tr>
       
        ";
}

echo " </tbody>
</table>
<script  src='https://kit.fontawesome.com/a342c01441.js' crossorigin='anonymous'></script>";