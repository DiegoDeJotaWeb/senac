<?php
include 'Pacote1.php';
class Endereco extends Pacote1{
    var $logradouro;
    var $numero;

    function Endereco($logradouro, $numero){
        $this->logradouro = $logradouro;
        $this->numero = $numero;
    }

    function getLogradouro(){
        return $this->logradouro;
    }

    function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    function getNumero(){
        return $this->numero;
    }


    function setNumero($numero){
        $this->numero = $numero;
    }
}


?>