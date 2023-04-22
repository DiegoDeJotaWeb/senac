<?php
include_once("./../config/conexao.php");

$tipoDoc = $_POST['tipo-doc'];

$query = "INSERT INTO tbl_tipo_documento(tipoDocumento)VALUES('$tipoDoc')";

$inserir_gestao = mysqli_query($conexao,$query);

if($inserir_gestao){
    header("Location:gestao-tipo-doc.php?msg=sucessocad");
    }else{
        header("Location:gestao-tipo-doc.php?msg=errocad");
    }

?>