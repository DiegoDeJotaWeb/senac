<?php
// incluir arquivos de conexao de banco de dados 
include 'functions.php';
$updatedata = new DB_con();
if (isset($_POST['update'])) {

    // GET the userid
    $userid = intval($_GET['id']);

    // Posted values 
    $nome = $_POST['nome'];
    $mae = $_POST['mae'];
    $pai = $_POST['pai'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $dataEntrega = $_POST['dataEntrega'];

    // chamada de funcão
    $sql = $updatedata->update($nome, $pai, $mae, $email, $telefone, $endereco, $dataEntrega, $userid);

    // mensagem apos a atualização
    echo "<script>alert ('registro atualizado com sucesso!')</script>";

    // Código para redirecionamento
    echo "<script>window.location.href = 'index.php';</script>";
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
        <div class="col-md-12">
            <h3>Crud Orientado a objeto php</h3>
            <hr>
        </div>
    </div>


    <?php
    // Obtenha o ID do usuario

    $userid = intval($_GET["id"]);
    $onerecord = new DB_con();

    $sql = $onerecord->fetchonerecord($userid);
    $cnt = 1;
    while ($row = mysqli_fetch_array($sql)) {

    ?>
<div class="container">
        <form name="insertrecord" method="post">
            <div class="row">
                <div class="col-md-4 my-3">
                    <b>Nome</b>
                    <input type="text" name="nome" value="<?= htmlentities($row['nome']); ?>" class="form-control">
                </div>
                <div class="col-md-4 my-3">
                    <b>Pai</b>
                    <input type="text" name="pai" value="<?= htmlentities($row['pai']); ?>" class="form-control">
                </div>
                <div class="col-md-4 my-3">
                    <b>Mãe</b>
                    <input type="text" name="mae" value="<?= htmlentities($row['mae']); ?>" class="form-control">
                </div>
                <div class="col-md-6 my-3">
                    <b>Email</b>
                    <input type="text" name="email" value="<?= htmlentities($row['email']); ?>" class="form-control">
                </div>
                <div class="col-md-6 my-3">
                    <b>Telefone</b>
                    <input type="text" name="telefone" value="<?= htmlentities($row['telefone']); ?>" class="form-control">
                </div>
                <div class="col-md-6 my-3">
                    <b>Endereço</b>
                    <input type="text" name="endereco" value="<?= htmlentities($row['endereco']); ?>" class="form-control">
                </div>
                <div class="col-md-6 my-3">
                    <b>Data de entrega</b>
                    <input type="text" name="dataEntrega" value="<?= htmlentities($row['dataEntrega']); ?>" class="form-control">
                </div>
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
</div>
    <?php
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>