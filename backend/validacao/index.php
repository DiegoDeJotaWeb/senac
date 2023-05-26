<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="_cadastro.php" method="POST" onSubmit="return valida_dados(this);">

            <div class="mb-3">
                <label for="" class="form-label">Nome</label>
                <input type="text" class="form-control" id="" name="name" size="20">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control" id="" name="email" size="20">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Selecione consulta</label>
                <select id="" class="form-select" name="estado">
                    <option selected >Escolha</option>
                    <option value="sp">estado 1</option>
                    <option value="sp">estado 1</option>
                    <option value="sp">estado 1</option>
                    <option value="sp">estado 1</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Login</label>
                <input type="text" class="form-control" id="" name="login" size="20">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Senha</label>
                <input type="text" class="form-control" id="" name="senha" size="20">
            </div>


            <div class="mb-3">
                <label for="" class="form-label">Confirmar senha</label>
                <input type="text" class="form-control" id="" name="confirmacao" size="20">
            </div>



            <button type="submit" class="btn btn-primary" name="submit">Consultar</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
</body>

</html>