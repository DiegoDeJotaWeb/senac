<?php 

include_once("./../config/conexao.php");



if($_POST){
    $id = $_POST['id'];
    $nome = $_POST['nome-categoria'];
    $img = $_POST['img-categoria'];
    $slug = $_POST['slug-categoria'];

    $queryEditarCategoria = " UPDATE tbl_categorias set nome = '$nome', img = '$img', slug = '$slug ' WHERE id = $id";
    echo $queryEditarCategoria;

    $gravar = mysqli_query($conexao, $queryEditarCategoria);

    if($gravar){
        header("Location: gestao-categoria.php");
    }else{
        //se não do $gravar
    }

}else{
    // se não do post
    header("Location: gestao-categoria.php");
}
?>