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
    <a href="index.php">Voltar</a>
    <form action="vendor/documento/inserir-tipo-doc.php" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label  class="form-label">Tipo de documento</label>
                    <input type="text" class="form-control" name="tipo-doc">
                </div>
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