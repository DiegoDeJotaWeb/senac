<!--array

Escreva um algoritmo que permita a leitura dos nomes de 10 pessoas e armazene os nomes lidos em um vetor. Após isto, o algoritmo deve permitir a leitura de mais 1 nome qualquer de pessoa e depois escrever a mensagem ACHEI, se o nome estiver entre os 10 nomes lidos anteriormente (guardados no vetor), ou NÃO ACHEI caso contrário.

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
    $nomes = array('Marcelo','Marceloh','Marceloi','Marcelod','Marcelos','Marcelofd','Marcelohg','Marcelolk','Marcelin','Marcelinho');
    
    $buscaNome = "Marcelin";

    if(in_array($buscaNome, $nomes)){
        echo "<h1>Achei</h1>";
    }else{
        echo "<h1>Não Achei</h1>";
    }
    
    ?>

</body>
</html>