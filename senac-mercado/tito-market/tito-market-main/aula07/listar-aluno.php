<?php

include_once("conexao.php");

$consulta = mysqli_query($conexao, "SELECT * FROM tbl_alunos");
$dados_alunos = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

?>

<table>
    <thead>
        <tr>
            <th>RA</th>
            <th>nome</th>
            <th>sobrenome</th>
            <th>data de nascimento</th>
            <th>Genero</th>
            <th>Situação</th>
            <th>Ação</th>
        </tr>
    </thead>


    <tbody>
<?php
    foreach($dados_alunos as $aluno){
   ?>

    <tr>
        <td><?php echo $aluno["cod_aluno"];?></td>
        <td><?php echo $aluno["nome"];?></td>
        <td><?php echo $aluno["sobrenome"];?></td>
        <td><?php echo $aluno["data_nascimento"];?></td>
        <td><?php echo  $aluno["genero"];?></td>
        <td>A</td>
        <td><a href="editar-aluno.php?id=<?php echo $aluno['cod_aluno']?>">Editar</a> | <a href="excluir-aluno.php?id=<?php echo $aluno['cod_aluno']?>">Apagar</a></td>

    </tr>
    <?php
}
?>

      
    </tbody>
</table>