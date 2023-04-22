<?php include_once("./config/conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a href="index.php">Voltar</a>


<div class="container">
    <h1>Cadastro de cliente</h1>
    <form action="config/cliente/inserir-cliente.php" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label  class="form-label">CPF</label>
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label  class="form-label">RG</label>
                    <input type="text" class="form-control" name="sobrenome">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label  class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" name="dataNasc">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label  class="form-label">Genero</label>
                    <select class="form-select" aria-label="Default select example" name="genero">


                        <option selected>Selecione</option>

                        <?php

                            $consulta = mysqli_query($conexao, "SELECT * FROM tbl_genero");
                            $dados_generos = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

                            foreach($dados_generos as $genero){
                                echo "<option value='1'>". $genero['nomeGenero'] ."</option>";
                              
                            }

                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6 offset-md-3 text-center">
                <div class="mb-3">
                     <input type="checkbox" name="newsletter">   Aceita receber notificações
                </div>
                <!-- <div class="mb-3">
                     <input type="checkbox">   Concordo com os termos de uso
                </div> -->
            </div>
          
            <div class="col-md-6 offset-md-3 text-center">
        <button type="submit" class="btn btn-primary">Salvar</button>
</div>
    </div>
    </form>
</div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>