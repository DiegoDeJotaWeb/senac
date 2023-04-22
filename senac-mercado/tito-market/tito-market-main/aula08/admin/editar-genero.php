<?php 

include_once("./../config/conexao.php");



if($_POST){
    $id = $_POST['id'];
    $genero = $_POST['nome-genero'];

    $queryEditarGenero = " UPDATE tbl_genero set nomeGenero = '$genero' WHERE idGenero = $id";
    echo $queryEditarGenero;

    $gravar = mysqli_query($conexao, $queryEditarGenero);

    if($gravar){
        header("Location: gestao-genero.php");
    }else{
        //se não do $gravar
    }

}else{
    // se não do post
    header("Location: gestao-genero.php");
}
?>