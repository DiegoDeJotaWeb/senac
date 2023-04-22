<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

@$id_aluno = $_GET['id'];

include_once("conexao.php");

$consulta = mysqli_query($conexao, "SELECT * FROM tbl_alunos WHERE cod_aluno = $id_aluno");
$dados_alunos = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

  foreach($dados_alunos as $aluno){
    ?>

<form action="editar.php" method="POST">
    <input type="text" name="nome" value="<?php echo $aluno["nome"];?>">
    <input type="text" name="sobrenome" value="<?php echo $aluno["sobrenome"];?>">
    <input type="date" name="data-nasc" value="<?php echo $aluno["data_nascimento"];?>">

    <input type="hidden" name="id" value="<?php echo $aluno["cod_aluno"];?>">

    <button>Alterar</button>

</form>
    
<?php }?>
</body>
</html>