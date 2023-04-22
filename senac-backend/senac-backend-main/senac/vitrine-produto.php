<?php
include('header.php');
include('dados-produtos.php');



$id = $_GET['id'];




echo "<h2>Descrição do produto</h2>";


echo "";

foreach ($dados_produtos as $produto) {
    if ($produto["id"] == $id) {

        echo "<div class='row mb-4'>
<div class='col-6'>
    <img src='".$produto['thumbnail']."' alt=''>
    <div class='row mt-4'>";

    

for($i =0; $i < count($produto['images']);$i++){
    echo "<div class='col-3'> <img src='".$produto['images'][$i]."' alt=''> </div>";
}


        echo "
    </div>
</div>
<div class='col-6'>
    <h3>".$produto['title']."</h3>
    <p>Categoria: ".$produto['category']."</p>
    <h1> R$".number_format($produto['price'] , 2, ',', '.')."</h1>
    <button type='button' class='btn btn-success'>Comprar</button>
</div>

</div>   
";
    }
}



 include('footer.php');
