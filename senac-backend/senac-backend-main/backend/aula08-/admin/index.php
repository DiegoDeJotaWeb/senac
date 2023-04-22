<?php include_once("../config/seguranca.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Administração</title>
</head>
<body>
    
    <a href="gestao-categoria.php">Cadastro de Categoria</a>
    <a href="gestao-genero.php">Cadastro de Genero</a>
    <a href="gestao-situacao.php">Cadastro de Situação</a>
    <a href="gestao-tipo-documento.php">Cadastro de Tipo de Documento</a>

    <?php
        echo "Olá, ".$_SESSION["NOME_USUARIO"]." ".$_SESSION["SOBRENOME_USUARIO"]." !";
    ?>

</body>
</html>