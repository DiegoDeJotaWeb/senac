<?php

$consulta = mysqli_query($conexao, "SELECT * FROM tbl_categorias");
$dados_categorias = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

 foreach($dados_categorias as $categoria){
    echo $categoria['nome'];
    echo "<img src='".$categoria['img']."'>";
 }

?>