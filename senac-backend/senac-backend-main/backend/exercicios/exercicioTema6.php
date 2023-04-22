<!--
     Faça um algoritmo para ler: a descrição do produto (nome), a quantidade adquirida e o preço unitário. Calcular e escrever o total (total = quantidade adquirida * preço unitário), o desconto e o total a pagar (total a pagar = total - desconto), sabendo-se que: - Se quantidade <= 5 o desconto será de 2% - Se quantidade > 5 e quantidade <=10 o desconto será de 3% - Se quantidade > 10 o desconto será de 5%
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        $produto = "copo";
        $qtd = 3;
        $precoUnt = 12.50;

        $totalCompra = 0;
        $total = $qtd * $precoUnt;
        $desc = 0;

        if($qtd <= 5){
            $desc = 0.02;
            $totalCompra = $total - ($total * $desc);
            echo "<h1>Total da Compra: $totalCompra</h1>";

        }else if($qtd > 5 && $qtd <= 10){
            $desc = 0.03;

            $totalCompra = $total - ($total * $desc);
            echo "<h1>Total da Compra: $totalCompra</h1>";
        }else{
            $desc = 0.05;

            $totalCompra = $total - ($total * $desc);
            echo "<h1>Total da Compra: $totalCompra</h1>";
        }

    ?>

</body>
</html>