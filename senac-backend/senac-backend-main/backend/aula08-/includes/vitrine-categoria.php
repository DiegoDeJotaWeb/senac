<?php

$query = "SELECT nome, slug, img FROM tbl_categorias";
$resultado = mysqli_query($conexao, $query);
$dados_categorias = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

foreach($dados_categorias as $categoria){
    echo "<div class='item'><div class='imgCat'><img src='".$categoria["img"]."'></div>";
    echo "<h4 class='text-center pb-2'>".$categoria["nome"]."</h4></div>";
}