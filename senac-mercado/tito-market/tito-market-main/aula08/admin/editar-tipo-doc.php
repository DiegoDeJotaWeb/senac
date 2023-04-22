<?php 

include_once("./../config/conexao.php");



if($_POST){
    $id = $_POST['id'];
    $tipoDoc = $_POST['tipoDocumento'];

    $queryEditarGenero = " UPDATE tbl_tipo_documento set tipoDocumento = '$tipoDoc' WHERE idTipoDocumento = $id";
    echo $queryEditarGenero;

    $gravar = mysqli_query($conexao, $queryEditarGenero);

    if($gravar){
        header("Location: gestao-tipo-doc.php");
    }else{
        //se não do $gravar
    }

}else{
    // se não do post
    header("Location: gestao-tipo-doc.php");
}
?>