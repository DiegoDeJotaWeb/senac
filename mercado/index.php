<?php
include('header.php');
include_once('dados-produtos.php');
?>


<h2>Vitrine</h2>
<div class="row">


    <?php
    foreach ($dados_produtos as $produto) {

        //   echo "<tr>";
        //   echo "<td> " . $produto['id'].  "</td>";
        //   echo "<td> <img src='". $produto['thumbnail'].    "' style='width:50%'></td>";
        //   echo "<td> " . $produto['title'].  "</td>";
        //   echo "<td>" . $produto['price'].  "</td>";
        //   echo "<td> " . $produto['discountPercentage'].  "</td>";
        //   echo "<td> " . $produto['rating'].  "</td>";
        //   echo "<td> " . $produto['stock'].  "</td>";
        //   echo "<td> " . $produto['brand'].  "</td>";
        //   echo "<td> " . $produto['category'].  "</td>";
        //   echo "<td> <a href='ver-produto.php?id=". $produto['id'] ."'><i class='fa-solid fa-eye'></i> </a></td>";
        //   echo "</tr>";


    ?>

        <div class="col-md-4 mb-4">

            <div class="card text-center" style="width: 18rem;">
                <img src="<?php echo $produto['thumbnail'] ?>" style='border-bottom: 1px solid rgba(0,0,0,.125);' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produto['title'] ?></h5>
                    <p class="card-text">R$ <?php echo  number_format($produto['price'] , 2, ',', '.')  ?></p>
                </div>

                <div class="card-body">
                    <a href="vitrine-produto.php?id=<?php echo $produto['id'] ?>" class="card-link">Detalhes</a>
                </div>
            </div>
        </div>
    <?php } ?>

</div>

<?php include('footer.php'); ?>