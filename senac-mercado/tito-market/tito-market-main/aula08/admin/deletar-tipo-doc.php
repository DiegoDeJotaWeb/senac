<?php
include_once("./../config/conexao.php");

if($_GET){
    $id = $_GET['id'];

    $query = "DELETE FROM tbl_tipo_documento WHERE idTipoDocumento = $id";
    
    $deletar_tipo_documento = mysqli_query($conexao,$query);

        
    if($deletar_tipo_documento){
        header("Location:gestao-tipo-doc.php?msg=sucessodel");
    }else{
        header("Location:gestao-tipo-doc.php?msg=errodel");
    }

}else{
    
}



?>