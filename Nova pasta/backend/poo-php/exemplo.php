<?php
class adicionaNumero //Classe é algo que define seu objetivo
{
    var $num1;
    var $num2;
    function addcalculo()
    {
        return ($this->num1*$this->num2); //$this aponta para ele mesmo
    }
}

$add = new adicionaNumero();
$add->num1=5;
$add->num2=6;

echo $add->addcalculo();
?>