
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

include_once("dados-produtos.php");
$id = $_GET['id'];

echo "<table>";

        echo "<thead>";
        echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Titulo</th>";
                echo "<th>Preço</th>";
                echo "<th>Desconto</th>";
                echo "<th>Avaliação</th>";
                echo "<th>Estoque</th>";
                echo "<th>Marca</th>";
                echo "<th>Categorias</th>";
                echo "<th></th>";
        echo "</tr>";
        echo "</thead>";

    echo "<tbody>";
    echo "<tr>";

foreach($dados_produtos as $produtos){
        if($produtos['id'] == $id){
                echo "<td>".$produtos['id']."</td>";
                echo "<td>".$produtos['title']."</td>";
                echo "<td>".$produtos['price']."</td>";
                echo "<td>".$produtos['discountPercentage']."</td>";
                echo "<td>".$produtos['rating']."</td>";
                echo "<td>".$produtos['stock']."</td>";
                echo "<td>".$produtos['brand']."</td>";
                echo "<td>".$produtos['category']."</td>";
        }
}

        echo "</tr>";
echo "</tbody>";
echo "</table";
echo "<a href='lista-produtos.php'></a>";


