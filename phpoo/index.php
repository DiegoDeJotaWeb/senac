<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require './MsgContatos.php';


    $listar = new Teste();

    $listar->tt();
    $msg = $listar->tt();
    echo $msg;

    ?>

</body>

</html>