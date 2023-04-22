<?php
include_once("../../../config/conexao.php");

$tipoDoc = $_POST['tipo-doc'];

$query = "INSERT INTO tbl_tipo_documento(tipoDocumento)VALUES('$tipoDoc')";
echo $query;

$inserir_tipo_doc = mysqli_query($conexao,$query);

if($inserir_tipo_doc){
    echo "Cadastro efetuado com sucesso, <a href='../../index.php'>Voltar</a>";
}else{
echo "Erro ao cadastrar tipo de documento, <a href='../../cadastra-tipo-doc.php'>";
}

?>