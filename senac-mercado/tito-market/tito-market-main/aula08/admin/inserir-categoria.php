<?php
include_once("./../config/conexao.php");

$nome = $_POST['nome-categoria'];
$img = $_POST['img-categoria'];
$slug = $_POST['slug-categoria'];

$query = "INSERT INTO tbl_categorias(nome,img,slug,idSituacao)VALUES('$nome','$img','$slug',1)";

$inserir_categoria = mysqli_query($conexao,$query);

if($inserir_categoria){
    header("Location:gestao-categoria.php?msg=sucessocad");
    }else{
        header("Location:gestao-categoria.php?msg=errocad");
    }

?>