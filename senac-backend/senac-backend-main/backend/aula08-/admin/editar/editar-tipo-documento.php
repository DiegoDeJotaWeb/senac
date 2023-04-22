<?php

include_once("../../config/conexao.php");

if($_POST){

    $id = $_POST["id"];
    $tipo = $_POST["tipo_documento"];

    $query = "UPDATE tbl_tipo_docs SET tipo_doc = '$tipo' WHERE id = $id";
    $gravar = mysqli_query($conexao, $query);

    if($gravar){
        header("Location: ../gestao-tipo-documento.php");
    }else{
        echo "não Funcionouu :(";
    }


}else{
    header("Location: ../gestao-tipo-documento.php");
}