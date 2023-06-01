<?php

class MsgContatos{
    public $connect;
    public $dados;

    public function listar(){
        return 'listar';
    }
}

class Teste extends MsgContatos{
    public $txt;


    public function tt(){
        $t = new MsgContatos;
            return "teste".$this->txt. $t->listar() ;
        }
}