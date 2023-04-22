<?php include_once("./config/conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="#">Home</a>
            <a href="#">Minha conta</a>
            <a href="#">Carrinho</a>
        </nav>
    </header>

    <main>
        <h3>Categorias</h3>
        <div id="categorias">
            <?php include_once("./includes/vitrine-categorias.php");?>
        </div>

        <div id="top-categorias"></div>

        <div id="banner"></div>

        <div id="top-mercados"></div>
      
        <h3>Mercados</h3>
        <div id="mercados"></div>
    </main>
        
</body>
</html>