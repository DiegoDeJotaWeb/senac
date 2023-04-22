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
                <th>Genero</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $consulta = mysqli_query($conexao, "SELECT * FROM tbl_genero");
            $dados_generos = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

            foreach($dados_generos as $genero){
                echo "<tr>";
                echo "<td>".$genero['nomeGenero']."</td>";
                echo "<td><a href='?acao=editar&id=".$genero['idGenero']."'>Editar</a> | 
                
                <a href='deletar-genero.php?id=".$genero['idGenero']."'>Deletar</a></td>";
                echo "</tr>";
            }

          ?>
    </tbody>
    </table>

    <?php
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'sucessocad'){
            echo "<p id='msg'>Genero cadastrada com sucesso!</p>";
        }

        if($_GET['msg'] == 'errocad'){
            echo "Erro ao cadastrar genero!";
        }

        if($_GET['msg'] == 'sucessodel'){
            echo "<p id='msg'>Genero deletada com sucesso!</p>";
        }

        if($_GET['msg'] == 'errodel'){
            echo "Erro ao deletar genero!";
        }
    }
    
    ?>

<?php

if(isset($_GET['acao'])){
    if($_GET['acao']=='editar'){
        $queryConsultarGenero = "SELECT * FROM tbl_genero WHERE idGenero =" . $_GET['id'];

        $consulta = mysqli_query($conexao, $queryConsultarGenero);
        $dados_generos = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
?>
<h4>Editar categoria</h4>
  <form action="editar-genero.php" method="POST" enctype="multipart/form-data">
  <?php
  foreach($dados_generos as $genero){
    echo "  <label for=''>Nome</label>
            <input type='text' name='nome-genero' value='".$genero['nomeGenero']."'>
         
      
            <input type='hidden' name='id' value='".$genero['idGenero']."'>
            <button>Gravar</button>";
}
  
  ?>
        
    </form>
<?php
    }
}else{
    ?>
    <h4>Cadastro de categoria</h4>
      <form action="inserir-genero.php" method="POST" enctype="multipart/form-data">
            <label for="">Genero</label>
            <input type="text" name="genero">
           
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