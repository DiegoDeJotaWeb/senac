<?php
// incluir arquivo de conexao de banco de dados 
include 'functions.php';

// Deletion 
if (isset($_GET['del'])) {
    // objeto ID da linha de exclusão 
    $rid = $_GET['del'];
    $deleted = new DB_con;
    $sql = $deletedata->delete($rid);

    if ($sql) {
        // mensagem para inserção bem sucedida

        echo "<script>alert('Registro excluido com sucesso')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
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
            <h3>Crud Orientado a objeto php</h3>
            <a href="insert.php" class="btn btn-primary">Cadastro</a>
            <hr>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Mãe</th>
                    <th>Pai</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Data da entrega</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </thead>
                <tbody>
                    <?php
                    $fetchdata = new DB_con();
                    $sql = $fetchdata->fetchdata();
                    $cnt = 1;

                    while ($row = mysqli_fetch_array($sql)) {

                    ?>


                        <tr>
                            <td><?= htmlentities($cnt); ?></td>
                            <td><?= htmlentities($row['nome']); ?></td>
                            <td><?= htmlentities($row['mae']); ?></td>
                            <td><?= htmlentities($row['pai']); ?></td>
                            <td><?= htmlentities($row['email']); ?></td>
                            <td><?= htmlentities($row['telefone']); ?></td>
                            <td><?= htmlentities($row['dataEntrega']); ?></td>
                            <td><a href="update.php?id=<?= htmlentities($cnt); ?>">Editar</a></td>
                            <td><a href="index.php?del=<?= htmlentities($row['id']); ?>">Deletar</a></td>
                        </tr>




                    <?php
                        // incremento de número de serie
                        $cnt++;
                    } ?>

                </tbody>

            </table>
        </div>
    </div>
</body>

</html>