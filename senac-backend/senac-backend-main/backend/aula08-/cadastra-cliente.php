<?php   include_once("config/conexao.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastra Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        input{
            width: 98%;
        }
        section{
            width: 80%;
            margin: 0 auto;
        }
        button{
            width: 20%;
        }
    </style>
</head>
<body>
    

    <section>
    <form action="cliente/inserir-cliente.php" method="POST" class="mb-3 mt-3">

    <div class="row">

    <div class="col-md-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu Nome" class="form-control">
    </div>
    <div class="col-md-3">
        <label for="sobrenome" class="form-label">Sobrenome:</label>
        <input type="text" name="sobrenome" placeholder="Digite seu Sobrenome" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="data" class="form-label">Data de nascimento:</label>
        <input type="date" name="data_nasc" placeholder="Digite sua Data de Nascimento" class="form-control">
    </div>
    <div class="col-md-3">
        <label for="genero" class="form-label">Genero:</label>
        <select name="genero" class="form-select">
            <?php
                $query = "SELECT * FROM tbl_generos";
                $consulta_genero = mysqli_query($conexao, $query);
                $result = mysqli_fetch_all($consulta_genero, MYSQLI_ASSOC);

                foreach($result as $genero){

            ?>
            <option value='<?$genero["id"]?>'><?=$genero["genero"]?>
            </option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="col-md-3">
        <label for="newsletter" class="form-label">Newsletters:</label>
        <input type="text" name="newsletter" placeholder="Deseja Receber as Newsletters?" class="form-control">
    </div>
    <div class="col-md-3">
        <label for="numero" class="form-label">Numero:</label>
        <input type="number" name="numero" placeholder="Digite seu numero" class="form-control">
    </div>
    <div class="col-md-5">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" name="email" placeholder="Digite seu E-mail" class="form-control">
    </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <button class="btn btn-secondary mt-2">Cadastrar</button>
    </div>
    </form>
    </section>

</body>
</html>