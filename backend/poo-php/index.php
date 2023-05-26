<?php

class adicionaNumero 
{

    var $num1;
    var $num2;


    function addcalculo()
    {
        return ($this->num1*$this->num2);//$this aponta para ele mesmo
    }

}

$add = new adicionaNumero();
$add->$num1=1;
$add->$num2=3;

echo $add->addcalculo();

?>