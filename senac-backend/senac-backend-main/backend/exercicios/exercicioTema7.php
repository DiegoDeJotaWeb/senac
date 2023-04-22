<!--

    Uma empresa quer verificar se um empregado está qualificado para a aposentadoria ou não. Para estar em condições, um dos seguintes requisitos deve ser satisfeito: - Ter no mínimo 65 anos de idade. - Ter trabalhado no mínimo 30 anos. - Ter no mínimo 60 anos e ter trabalhado no mínimo 25 anos. Com base nas informações acima, faça um algoritmo que leia: o número do empregado (código), o ano de seu nascimento e o ano de seu ingresso na empresa. O programa deverá escrever a idade e o tempo de trabalho do empregado e a mensagem 'Requerer aposentadoria' ou 'Não requerer' 

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
    
    
    $codigo = 10223;
    $dataNasc = 1950;
    $AnoEmpresa = 1997;
    $codigoDig = 10223;
    $tempoTrabalhado = 2022 - $AnoEmpresa;
    $tempoRestante = 25 - $tempoTrabalhado;

    if($codigoDig == $codigo){

        $idade = 2022 - $dataNasc;
        echo "<h1>Idade: $idade<br>
            Ano de Ingresso na Empresa: $AnoEmpresa
            </h1>";

        if($idade >= 60 && $tempoTrabalhado >= 25){
    
        echo "<h1>Requer Aposentadoria</h1>";
        }else{
            echo "<h1>Não Requer Aposentadoria
            <br>
            Ainda Faltam $tempoRestante Anos
            </h1>";
        }
    }

    ?>

</body>
</html>