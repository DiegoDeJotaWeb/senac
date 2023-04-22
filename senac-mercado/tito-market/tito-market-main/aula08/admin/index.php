<?php include_once("./config/seguranca.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "Olá, " . $_SESSION['NOME_USUARIO_ADMIN']; ?>
<ul>
<li><a href="gestao-genero.php"> Cadastar categoria</a></li>
    <li><a href=""> Cadastar Situação</a></li>
    <li><a href="gestao-genero.php">Cadastrar gênero</a></li>
    <li><a href="gestao-tipo-doc.php">Cadastrar tipo documento</a></li>
   

   
</ul>
    
</body>
</html>