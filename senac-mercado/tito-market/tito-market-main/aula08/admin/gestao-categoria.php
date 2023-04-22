<?php include_once("../config/conexao.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de categoria</title>
</head>
<body>




    <a href="index.php">Voltar</a>
    <h4>Gestão de categorias</h4>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Visibilidade</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $consulta = mysqli_query($conexao, "SELECT * FROM tbl_categorias");
            $dados_categorias = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

            foreach($dados_categorias as $categoria){
                echo "<tr>";
                echo "<td>".$categoria['nome']."</td>";
                echo "<td>".$categoria['visibilidade']."</td>";
                echo "<td>".$categoria['idSituacao']."</td>";
                echo "<td><a href='?acao=editar&id=".$categoria['id']."'>Editar</a> | 
                
                <a href='deletar-categoria.php?id=".$categoria['id']."'>Deletar</a></td>";
                echo "</tr>";
            }

          ?>
    </tbody>
    </table>

    <?php
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'sucessocad'){
            echo "<p id='msg'>Categoria cadastrada com sucesso!</p>";
        }

        if($_GET['msg'] == 'errocad'){
            echo "Erro ao cadastrar categoria!";
        }

        if($_GET['msg'] == 'sucessodel'){
            echo "<p id='msg'>Categoria deletada com sucesso!</p>";
        }

        if($_GET['msg'] == 'errodel'){
            echo "Erro ao deletar categoria!";
        }
    }
    
    ?>

<?php

if(isset($_GET['acao'])){
    if($_GET['acao']=='editar'){
        $queryConsultarCategoria = "SELECT * FROM tbl_categorias WHERE id =" . $_GET['id'];

        $consulta = mysqli_query($conexao, $queryConsultarCategoria);
        $dados_categorias = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
?>
<h4>Editar categoria</h4>
  <form action="editar-categoria.php" method="POST" enctype="multipart/form-data">
  <?php
  foreach($dados_categorias as $categoria){
    echo "  <label for=''>Nome</label>
            <input type='text' name='nome-categoria' value='".$categoria['nome']."'>
            <label for=''>Imagem</label>
            <input type='text' name='img-categoria' value='".$categoria['img']."'>
            <label for=''>Slug</label>
            <input type='text' name='slug-categoria' value='".$categoria['slug']."'>
            <input type='hidden' name='id' value='".$categoria['id']."'>
            <button>Gravar</button>";
}
  
  ?>
        
    </form>
<?php
    }
}else{
    ?>
    <h4>Cadastro de categoria</h4>
      <form action="inserir-categoria.php" method="POST" enctype="multipart/form-data">
            <label for="">Nome</label>
            <input type="text" name="nome-categoria">
            <label for="">Imagem</label>
            <input type="text" name="img-categoria">
            <label for="">Slug</label>
            <input type="text" name="slug-categoria">
            <button>Gravar</button>
        </form>
    <?php
}
?>


<script>
    var msg = document.getElementById("msg");
    setTimeout(() => {
    msg.style.display = "none";
    }, 5000)
</script>
    
</body>
</html>