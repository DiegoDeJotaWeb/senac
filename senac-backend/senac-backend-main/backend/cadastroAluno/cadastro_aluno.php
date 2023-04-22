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
        <input type="hidden" name="cod_aluno" value="<?=$id?>">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="sobrenome" placeholder="sobrenome">
        <input type="date" name="data-nas" placeholder="DD/MM/AAAA">
            <select name="genero">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
        <button>Cadastrar</button>
    </form>

</body>
</html>