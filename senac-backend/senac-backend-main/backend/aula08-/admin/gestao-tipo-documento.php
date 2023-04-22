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
    
    <form action="inserir-tipo-documento.php" method="POST">
        <input type="text" name="tipo_documento">
        <input type="hidden" name="id">
        <button>Cadastrar</button>
    </form>



<a href="index.php">Voltar</a>

<h4>Gestão de Categorias</h4>

<table>
    <thead>
        <tr>
            <th>tipo documentos</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryConsultaCat = "SELECT * FROM tbl_tipo_docs";
        $consulta = mysqli_query($conexao, $queryConsultaCat);
        $resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

        foreach($resultado as $categoria){
            echo "<tr>
                    <td>".$categoria["tipo_doc"]."</td>
                    <td>
                        <a href='?acao=editar&id=".$categoria["id"]."'><i class='fa-solid fa-pencil'></i></a>
                        <a href='deletes/deletar-tipo-documento.php?id=".$categoria["id"]."'><i class='fa-solid fa-trash'></i></a>
                    </td>
                </tr>";
        }
        
        ?>
    </tbody>
</table>

<?php
    if(isset($_GET["msg"])){
        if($_GET["msg"] == "sucessocad"){
            echo "tipo-documento cadastrada com sucesso!";
        }
        if($_GET["msg"] == "errocad"){
            echo "Erro ao cadastrar tipo-documento!";
        }
    }
?>

<?php
    if(isset($_GET["acao"])){
        if($_GET["acao"] == "editar"){

            $queryConsultartipo_documento = "SELECT * FROM tbl_tipo_docs WHERE id = ".$_GET["id"];
            $consultartipo_documento = mysqli_query($conexao, $queryConsultartipo_documento);
            $resultado = mysqli_fetch_all($consultartipo_documento, MYSQLI_ASSOC);

            foreach($resultado as $tipo_documento){

                echo '
                        <h4>Editar tipo documento</h4>
                    <form action="editar/editar-tipo-documento.php" method="POST">

                        <input type="hidden" name="id" value="'.$tipo_documento["id"].'">
                        <input type="text" name="tipo_documento" value="'.$tipo_documento["tipo_doc"].'">

                        <button>Salvar</button>
                    </form>'; 

            }
            ?>

            <h4>Gestão de tipo_documentos</h4>

        
            <?php
        }
    }else{
        echo '<h4>Editar tipo documento</h4>
    
        <form action="inserir-tipo-documento.php" method="POST">
            <input type="text" name="tipo_documento">
    
            <button>Salvar</button>
        </form>';
    }
?>

<script src="https://kit.fontawesome.com/a342c01441.js" crossorigin="anonymous"></script>

</body>
</html>