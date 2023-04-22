<?php
include_once("./../config/conexao.php");

if($_GET){
    $id = $_GET['id'];

    $query = "DELETE FROM tbl_categorias WHERE id = $id";
    
    $deletar_categoria = mysqli_query($conexao,$query);

        
    if($deletar_categoria){
        header("Location:gestao-categoria.php?msg=sucessodel");
    }else{
        header("Location:gestao-categoria.php?msg=errodel");
    }

}else{
    
}



?>