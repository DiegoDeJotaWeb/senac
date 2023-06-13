<?php
// incluir arquivo de conexao de banco de dados 
include 'functions.php';

// Deletion 
if(isset($_GET['del'])){
    // objeto ID da linha de exclusão 
    $rid = $_GET['del'];
    $deleted = new DB_con;

    
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
        <div class="col-md-12">
            <h3>Crud Orientado a objeto php</h3>
            <hr>
        </div>
    </div>
    <div class="container">
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
                    <input type="text" name="dataEntrega" class="form-control">
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>


        </form>
    </div>
</body>

</html>