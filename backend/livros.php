<?php


$chave = $_POST['chave'];
$busca = $_POST['busca'];

if (strlen($busca) < 2) {
    echo "O termo a ser buscado deve ter no maximo 2 caracteres!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <?php

    include("./config/_conecta.php");
    $consulta = "SELECT * FROM livros WHERE $chave LIKE '%$busca%'";
    $con = $conn->query($consulta) or die($conn->error);

    ?>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td>ISBN</td>
                    <td>Titulo</td>
                    <td>Autor</td>
                    <td>Paginas</td>
                    <td>Preço</td>
                </tr>
            </thead>

            <tbody>
                <?php while ($dados = $con->fetch_array()) { ?>
                    <tr>
                        <td><?php echo $dados["isbn"]; ?></td>
                        <td><?php echo $dados["titulo"]; ?></td>
                        <td><?php echo $dados["autor"]; ?></td>
                        <td><?php echo $dados["paginas"]; ?></td>
                        <td><?php echo $dados["preco"]; ?></td>
                        <td><a href="atualizar.php?isbn=<?php echo $dados["isbn"]; ?>">alterar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p><a href="livros.html">Voltar</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>