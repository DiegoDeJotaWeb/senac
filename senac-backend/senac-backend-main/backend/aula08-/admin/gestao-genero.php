<?php include_once("../config/conexao.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        th, td, table{
            border: 1px solid #090909;
            text-align: center;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    
    <form action="inserir-genero.php" method="POST">
        <input type="text" name="genero">
        <input type="hidden" name="id">
        <button>Cadastrar</button>
    </form>



<a href="index.php">Voltar</a>

<h4>Gestão de Generos</h4>

<table>
    <thead>
        <tr>
            <th>generos</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryConsultaCat = "SELECT * FROM tbl_generos";
        $consulta = mysqli_query($conexao, $queryConsultaCat);
        $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

        foreach($resultado as $categoria){
            echo "<tr>
                    <td>".$categoria["genero"]."</td>
                    <td>
                        <a href='?acao=editar&id=".$categoria["id"]."'><i class='fa-solid fa-pencil'></i></a>
                        <a href='deletes/deletar-genero.php?id=".$categoria["id"]."'><i class='fa-solid fa-trash'></i></a>
                    </td>
                </tr>";
        }
        
        ?>
    </tbody>
</table>

<?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo "Genero cadastrada com sucesso!";
        }
        if($_GET["msg"] == "errocad"){
            echo "Erro ao cadastrar Genero!";
        }
    }
?>

<?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){

            $queryConsultarGenero = "SELECT * FROM tbl_generos WHERE id = ".$_GET["id"];
            $consultarGenero = mysqli_query($conexao, $queryConsultarGenero);
            $resultado = mysqli_fetch_all($consultarGenero, MYSQLI_ASSOC);

            foreach($resultado as $genero){

                echo '
                        <h4>Editar genero</h4>
                    <form action="editar/editar-genero.php" method="POST">

                        <input type="hidden" name="id" value="'.$categoria["id"].'">
                        <input type="text" name="genero" value="'.$categoria["genero"].'">

                        <button>Salvar</button>
                    </form>'; 

            }
            ?>

            <h4>Gestão de Generos</h4>

        
            <?php
        }
    }else{
        echo '<h4>Editar genero</h4>
    
        <form action="inserir-genero.php" method="POST">
            <input type="text" name="genero">
    
            <button>Salvar</button>
        </form>';
    }
?>

<script src="https://kit.fontawesome.com/a342c01441.js" crossorigin="anonymous"></script>

</body>
</html>