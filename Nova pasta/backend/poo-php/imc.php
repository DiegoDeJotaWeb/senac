<?php
class imc
{

    var $altura;
    var $peso;

    function imccalculo()
    {
        return ($this->peso / ($this->altura * $this->altura));
    }
}

$add = new imc();
$add->altura = 1.71;
$add->peso = 80;

$num = $add->imccalculo();

echo "Sua altura: " . $add->altura;
echo "<br>";
echo "Seu peso: " . $add->peso;
echo "<br>";
echo "Seu IMC: " . number_format($num, 2, ",", ".");
echo "<br>";
if ($num < 18.5) {
    echo "abaixo do peso";
} elseif ($num >= 18.6 && $num <= 24.9) {
    echo "Pesso normal";
} elseif ($num >= 25 && $num <= 29.9) {
    echo "Sobrepeso";
} elseif ($num >= 30 && $num <= 34.9) {
    echo "Obesidade grau I";
} elseif ($num >= 35 && $num <= 39.9) {
    echo "Obesidade grau II";
} else {
    echo "Obesidade grau III";
}
