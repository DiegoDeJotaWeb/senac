<?php include_once("../config/conexao.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tito's Market - Cadastro de situação</title>
</head>
<body>




    <a href="index.php">Voltar</a>
    <h4>Gestão de Situação</h4>
    <table>
        <thead>
            <tr>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $consulta = mysqli_query($conexao, "SELECT * FROM tbl_situacao");
            $dados_situacao = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

            foreach($dados_situacao as $situacao){
                echo "<tr>";
                echo "<td>".$situacao['situacao']."</td>";
                echo "<td><a href='?acao=editar&id=".$situacao['id']."'>Editar</a> | 
                
                <a href='deletar-situacao.php?id=".$situacao['id']."'>Deletar</a></td>";
                echo "</tr>";
            }

          ?>
    </tbody>
    </table>

    <?php
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'sucessocad'){
            echo "<p id='msg'>Situacao cadastrada com sucesso!</p>";
        }

        if($_GET['msg'] == 'errocad'){
            echo "Erro ao cadastrar situacao!";
        }

        if($_GET['msg'] == 'sucessodel'){
            echo "<p id='msg'>Situacao deletada com sucesso!</p>";
        }

        if($_GET['msg'] == 'errodel'){
            echo "Erro ao deletar situacao!";
        }
    }
    
    ?>

<?php

if(isset($_GET['acao'])){
    if($_GET['acao']=='editar'){
        $queryConsultarSituacao = "SELECT * FROM tbl_situacao WHERE id =" . $_GET['id'];

        $consulta = mysqli_query($conexao, $queryConsultarSituacao);
        $dados_situacao = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
?>
<h4>Editar Situaçãohgfhfg</h4>
  <form action="editar-situacao.php" method="POST" enctype="multipart/form-data">
  <?php
  foreach($dados_situacao as $situacao){
    echo "  <label for=''>Situação</label>
            <input type='text' name='situacao' value='".$situacao['situacao']."'>
         
      
            <input type='hidden' name='id' value='".$situacao['id']."'>
            <button>Gravar</button>";
}
  
  ?>
        
    </form>
<?php
    }
}else{
    ?>
    <h4>Cadastro de situação</h4>
      <form action="inserir-situacao.php" method="POST" enctype="multipart/form-data">
            <label for="">Situação</label>
            <input type="text" name="situacao">
           
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