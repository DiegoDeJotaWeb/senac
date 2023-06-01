<?php

class Sala
{
    var $curso;
    var $aluno;
    var $sala;

    function imprimir(){
        return "Curso: ". $this->curso . " <br> Aluno: " . $this->aluno;
    }

    
}

$escola = new Sala();
$escola->curso = "Técnico em Informática para Internet";
$escola->aluno = "Diego ";

echo $escola->imprimir();

// print_r(get_object_vars($escola));

?>