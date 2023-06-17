<?php

function get_endereco($cep)
{
    // formatar o cep removendo caracteres não numericos

    $cep = preg_replace("/[^0-9]/", "", $cep);
    $url = "http://viacep.com.br/ws/$cep/xml/";

    $xml = simplexml_load_file($url);

    return $xml;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <form method="post">
            <div class="row">
                <div class="col-md-12 my-3">
                    <b>CEP</b>
                    <input type="text" name="cep" class="form-control">
                </div>
                <div class="col-md-12 my-3">
                    <button type="submit" class="btn btn-primary">Pesquisar endereço</button>
                </div>
            </div>
        </form>

        <?php
        if (isset($_POST["cep"])) {
        ?>
            <h2>Resultado de pesquisa</h2>

            <p><?php $endereco = get_endereco($_POST['cep']); ?></p>

            <p>CEP: <?php echo $endereco->cep; ?></p>
            <p>Logradouro: <?php echo $endereco->logradouro; ?></p>
            <p>Bairro: <?php echo $endereco->bairro; ?></p>
            <p>Localidade: <?php echo $endereco->localidade; ?></p>
            <p>UF: <?php echo $endereco->uf; ?></p>

        <?php } ?>

    </div>



</body>

</html>