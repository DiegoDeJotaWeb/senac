<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="cadastrar-aluno.php" method="POST">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <input type="date" name="data-nasc" placeholder="DD/MM/AAAA">

    <select name="genero" id="">
        <option value="m">Masculino</option>
        <option value="f">Feminino</option>
    </select>

    <button>Cadastrar</button>

</form>
    
</body>
</html>