<?php 
class Pacote1{
    var $nome;
    var $descricao;

    function __construct($nome, $descricao){
        $this->nome = $nome;
        $this->descricao = $descricao;
    }


    function getNome(){
        return $this->nome;
    }

    function getDescricao(){
        return $this->descricao;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    


}

  
