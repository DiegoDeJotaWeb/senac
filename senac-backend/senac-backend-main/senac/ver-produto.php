
<?php
include('header.php');
include('dados-produtos.php');



$id = $_GET['id'];




echo "<h2>Descrição do produto</h2>";

echo "
<table class='table'>
    <thead>
        <tr>
        <th>id</th>
        <th>Imagem</th>
        <th>Title</th>
        <th>Preço</th>
        <th>Porcentagem de desconto</th>
        <th>Avaliação</th>
        <th>Estoque</th>
        <th>Marca</th>
        <th>Categoria</th>
        <th>Ações</th>
        </tr>

    </thead>
    <tbody>
        
";


foreach ($dados_produtos as $produto) {
    if ($produto["id"] == $id) {
        echo "<tr>";
        echo "<td> " . $produto['id'].  "</td>";
        echo "<td> <img src='". $produto['thumbnail'].    "' style='width:50%'></td>";
        echo "<td> " . $produto['title'].  "</td>";
        echo "<td>" . $produto['price'].  "</td>";
        echo "<td> " . $produto['discountPercentage'].  "</td>";
        echo "<td> " . $produto['rating'].  "</td>";
        echo "<td> " . $produto['stock'].  "</td>";
        echo "<td> " . $produto['brand'].  "</td>";
        echo "<td> " . $produto['category'].  "</td>";
      

        
        echo "<td> <a href='listar-produtos.php'> <i class='fa-solid fa-left-long'></i> </a></td>";
        echo "</tr>";
    }
}

echo "
    </tbody>

</table>
";


include('footer.php');