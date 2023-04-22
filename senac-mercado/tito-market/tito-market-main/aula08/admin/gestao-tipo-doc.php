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
                <th>Tipo de documento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $consulta = mysqli_query($conexao, "SELECT * FROM tbl_tipo_documento");
            $dados_tipo_doc = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

            foreach($dados_tipo_doc as $tipo_doc){
                echo "<tr>";
                echo "<td>".$tipo_doc['tipoDocumento']."</td>";
                echo "<td><a href='?acao=editar&id=".$tipo_doc['idTipoDocumento']."'>Editar</a> | 
                
                <a href='deletar-tipo-doc.php?id=".$tipo_doc['idTipoDocumento']."'>Deletar</a></td>";
                echo "</tr>";
            }

          ?>
    </tbody>
    </table>

    <?php
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'sucessocad'){
            echo "<p id='msg'>Tipo de documento cadastrada com sucesso!</p>";
        }

        if($_GET['msg'] == 'errocad'){
            echo "Erro ao cadastrar tipo de documento!";
        }

        if($_GET['msg'] == 'sucessodel'){
            echo "<p id='msg'>Tipo de documento deletada com sucesso!</p>";
        }

        if($_GET['msg'] == 'errodel'){
            echo "Erro ao deletar tipo de documento!";
        }
    }
    
    ?>

<?php

if(isset($_GET['acao'])){
    if($_GET['acao']=='editar'){
        $queryConsultarTipoDoc = "SELECT * FROM tbl_tipo_documento WHERE idTipoDocumento =" . $_GET['id'];

        $consulta = mysqli_query($conexao, $queryConsultarTipoDoc);
        $dados_tipoDocs = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
?>
<h4>Editar categoria</h4>
  <form action="editar-tipo-doc.php" method="POST" enctype="multipart/form-data">
  <?php
  foreach($dados_tipoDocs as $tipoDoc){
    echo "  <label for=''>Tipo documento</label>
            <input type='text' name='tipoDocumento' value='".$tipoDoc['tipoDocumento']."'>
         
      
            <input type='hidden' name='id' value='".$tipoDoc['idTipoDocumento']."'>
            <button>Gravar</button>";
}
  
  ?>
        
    </form>
<?php
    }
}else{
    ?>
    <h4>Cadastro de categoria</h4>
      <form action="inserir-tipo-doc.php" method="POST" enctype="multipart/form-data">
            <label for="">Tipo documento</label>
            <input type="text" name="tipo-doc">
           
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