<?php

include_once("../../config/conexao.php");

if($_POST){

    $id = $_POST["id"];
    $situacao = $_POST["situacao"];

    $query = "UPDATE tbl_situacao SET situacao = '$situacao' WHERE id = $id";
    $gravar = mysqli_query($conexao, $query);

    if($gravar){
        header("Location: ../gestao-situacao.php");
    }else{
        echo "não Funcionouu :(";
    }


}else{
    header("Location: ../gestao-situacao.php");
}