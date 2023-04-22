<?php include_once("../config/conexao.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de Categoria</title>

    <style>
        th, td, table{
            border: 1px solid #090909;
            text-align: center;
            border-collapse: collapse;
        }
    </style>

</head>
<body>

<a href="index.php">Voltar</a>

<h4>Gestão de Categorias</h4>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Visibilidade</th>
            <th>ID Situação</th>
            <th>Edição</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryConsultaCat = "SELECT * FROM tbl_categorias";
        $consulta = mysqli_query($conexao, $queryConsultaCat);
        $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

        foreach($resultado as $categoria){
            echo "<tr>
                    <td>".$categoria["nome"]."</td>
                    <td>".$categoria["visibilidade"]."</td>
                    <td>".$categoria["id_situacao"]."</td>
                    <td>
                        <a href='?acao=editar&id=".$categoria["id"]."'><i class='fa-solid fa-pencil'></i></a>
                        <a href='deletes/deletar-categoria.php?id=".$categoria["id"]."'><i class='fa-solid fa-trash'></i></a>
                    </td>
                </tr>";
        }
        
        ?>
    </tbody>
</table>

<?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo "Categoria cadastrada com sucesso!";
        }
        if($_GET["msg"] == "errocad"){
            echo "Erro ao cadastrar categoria!";
        }
    }
?>

<?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){

            $queryConsultarCategoria = "SELECT * FROM tbl_categorias WHERE id = ".$_GET["id"];
            $consultarCategoria = mysqli_query($conexao, $queryConsultarCategoria);
            $resultado = mysqli_fetch_all($consultarCategoria, MYSQLI_ASSOC);

            foreach($resultado as $categoria){

                echo '
                        <h4>Editar Categoria</h4>
                    <form action="editar/editar-categoria.php" method="POST">

                        <input type="hidden" name="id" value="'.$categoria["id"].'">
                        <input type="text" name="nome-categoria" value="'.$categoria["nome"].'">
                        <input type="text" name="img-categoria" value="'.$categoria["img"].'">
                        <input type="text" name="slug-categoria" value="'.$categoria["slug"].'">

                        <button>Salvar</button>
                    </form>'; 

            }
            ?>

            <h4>Gestão de Categorias</h4>

        
            <?php
        }
    }else{
        echo '<h4>Editar Categoria</h4>
    
        <form action="inserir-categoria.php" method="POST">
            <input type="text" name="nome-categoria" placeholder="nome-categoria">
            <input type="text" name="img-categoria" placeholder="img-categoria">
            <input type="text" name="slug-categoria" placeholder="slug-categoria">
    
            <button>Salvar</button>
        </form>';
    }
?>

<script src="https://kit.fontawesome.com/a342c01441.js" crossorigin="anonymous"></script>
</body>
</html>