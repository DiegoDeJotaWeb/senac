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
        <h1 class="mb-3">Cadastro</h1>

        <form action="./vendor/_insert.php" method="POST">

            <div class="mb-3">
                <label for="" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="" name="isbn">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="" name="titulo">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Autor</label>
                <input type="text" class="form-control" id="" name="autor">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Paginas</label>
                <input type="text" class="form-control" id="" name="paginas">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Preço</label>
                <input type="text" class="form-control" id="" name="preco">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>