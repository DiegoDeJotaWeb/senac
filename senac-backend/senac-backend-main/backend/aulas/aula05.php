<?php

//Requisições GET/POST


$produtos = [
    [1, 'Tenis Nike', 299.90],
    [2, 'Camiseta Nike', 199.90],
    [3, 'Tenis Puma', 199.90],
    [4, 'Camiseta Basica', 39.90]
];

if(isset($_GET['id'])){
    $id = @$_GET['id'];
    
    echo "<a href='aula05.php'>Voltar</a>";


foreach ($produtos as $produto) {
    if($produto[0] == $id){
        echo "<p>Nome do Produto: $produto[1]</p>";
        echo "<p>Preço: $produto[1]</p>";
        }
    }
}else{
    echo "<h2>Vitrine de produtos</h2>";

    foreach ($produtos as $produto) {
        
            echo "<p>Nome do Produto: $produto[1]</p>";
            echo "<p>Preço: $produto[1]</p>";
            echo "<a href='?id=$produto[0]'>Detalhes</a>";
    }
}