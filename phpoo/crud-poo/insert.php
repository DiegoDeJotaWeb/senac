<?php
// incluir arquivo de conexao de banco de dados 
require_once 'functions.php';

$inserdata = new DB_con();
if (isset($_POST['insert'])) {

    // valores postados

    $nome = $_POST['nome'];
    $pai = $_POST['pai'];
    $mae = $_POST['mae'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $dataEntrega = $_POST['dataEntrega'];

    // chamada de função 
    $sql = $insertdata->insert($nome, $pai, $mae, $email, $telefone, $endereco, $dataEntrega);

    if ($sql) {
        // mensagem para inserção bem sucedida

        echo "<script>alert('Registro inserido com sucesso')</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        // mensagem para inserção sem sucesso 
        echo "<script>alert('Algo deu errado. Por favor, tente novamente')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<div class="container">
        <div class="col-md-12 py-4">
            <h3>Inserindo registro | Crud Orientado a Objeto php</h3>
            <a href="insert.php" class="btn btn-primary">Cadastro</a>
            <hr>
        </div>
    

    <form name="insertrecord" method="post">
        <div class="row">
            <div class="col-md-4 my-3">
                <b>Nome</b>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="col-md-4 my-3">
                <b>Pai</b>
                <input type="text" name="pai" class="form-control">
            </div>
            <div class="col-md-4 my-3">
                <b>Mãe</b>
                <input type="text" name="mae" class="form-control">
            </div>
            <div class="col-md-6 my-3">
                <b>Email</b>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="col-md-6 my-3">
                <b>Telefone</b>
                <input type="text" name="telefone" class="form-control">
            </div>
            <div class="col-md-6 my-3">
                <b>Endereço</b>
                <input type="text" name="endereco" class="form-control">
            </div>
            <div class="col-md-6 my-3">
                <b>Data de entrega</b>
                <input type="date" name="dataEntrega" class="form-control">
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>


    </form>
    </div>
</body>

</html>