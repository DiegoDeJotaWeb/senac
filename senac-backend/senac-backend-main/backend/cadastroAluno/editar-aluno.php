<?php include_once("conexao.php"); @$id = $_GET["id"];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Dados Aluno</title>
</head>
<body>

    <?php
        $query = "SELECT nome, sobrenome, data_nascimento FROM tbl_alunos WHERE cod_aluno = $id";
        $rs_aluno = mysqli_query($conexao, $query);
        $dados_aluno = mysqli_fetch_all($rs_aluno, MYSQLI_ASSOC);
    ?>
    
    <form action="atualizar-aluno.php" method="POST">
        <input type="text" name="nome" value="<?=$dados_aluno[0]["nome"]?>">
        <input type="text" name="sobrenome" value="<?=$dados_aluno[0]["sobrenome"]?>">
        <input type="text" name="data-nas" value="<?=$dados_aluno[0]["data_nascimento"]?>">

        <input type="submit" value="Atualizar">
    </form>

</body>
</html>