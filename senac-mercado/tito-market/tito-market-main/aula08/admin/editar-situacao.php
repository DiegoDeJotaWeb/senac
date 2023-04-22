<?php 

include_once("./../config/conexao.php");



if($_POST){
    $id = $_POST['id'];
    $situacao = $_POST['situacao'];

    $queryEditarSituacao = " UPDATE tbl_situacao set situacao = '$situacao' WHERE id = $id";
    echo $queryEditarSituacao;

    $gravar = mysqli_query($conexao, $queryEditarSituacao);

    if($gravar){
        header("Location: gestao-situacao.php");
    }else{
        //se não do $gravar
    }

}else{
    // se não do post
    header("Location: gestao-situacao.php");
}
?>  