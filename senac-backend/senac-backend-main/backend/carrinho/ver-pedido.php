<style>
        th{
            border: 1px solid black;
            padding: 2px 10px;
        }
        td{
            padding: 5px 15px;
            text-align: center;
            border: 1px solid black;
        }
</style>

<?php

include_once("dados-carrinho.php");

$id = @$_GET["id"];

echo "<h1>Carrinho: </h1>";

echo "<table>";
    echo "<thead>";
        echo "<tr>";
            echo "<th>ID: </th>";
            echo "<th>Titulo: </th>";
            echo "<th>Preço: </th>";
            echo "<th>Qtd.</th>";
            echo "<th>Total: </th>";
            echo "<th>Desc %</th>";
            echo "<th>Desc R$</th>";
        echo "</tr>";
    echo "</thead>";

foreach($dados_carrinho as $carrinho){
    if($carrinho['id'] == $id){
        foreach($carrinho['products'] as $produto){
        
        echo "<tbody>";
        echo "<tr>";
            echo "<td>".$produto["id"]."</td>";
            echo "<td>".$produto['title']."</td>";
            echo "<td>".$produto['price']."</td>";
            echo "<td>".$produto['quantity']."</td>";
            echo "<td>".$produto['total']."</td>";
            echo "<td>".$produto['discountPercentage']."</td>";
            echo "<td>".$produto['discountedPrice']."</td>";

            echo "<h3><a href='lista.usuarios.php'></a></h3>";
        echo "</tr>";
        echo "</tbody>";
        
        }
    }
}
echo "</table>";

