<?php

include_once("dados-colaboradores.php");

$salario_liquido = 0;

$re = $_GET["re"];

foreach($dados_colaboradores as $colaborador){
    if($colaborador["re"] == $re){

        if($colaborador["salario_base"] <= 1212){
            $salario_liquido = $colaborador["salario_base"] - ($inss = $colaborador["salario_base"] * 0.075)-($vt = $colaborador["salario_base"] * 0.06)-(120);

        }elseif($colaborador["salario_base"] >1212 && $colaborador["salario_base"] < 2427.35){
            $salario_liquido = $colaborador["salario_base"] - ($inss = $colaborador["salario_base"] * 0.09)-($vt = $colaborador["salario_base"] * 0.06)-(120);

        }elseif($colaborador["salario_base"] > 2427.35 && $colaborador["salario_base"] < 3641.03){
            $salario_liquido = $colaborador["salario_base"] - ($inss = $colaborador["salario_base"] * 0.12)-($vt = $colaborador["salario_base"] * 0.06)-(120);

        }elseif($colaborador["salario_base"] > 3641.03){
            $salario_liquido = $colaborador["salario_base"] - ($inss = $colaborador["salario_base"] * 0.14)-($vt = $colaborador["salario_base"] * 0.06)-(120);

        }

        echo "<p>RE: ".$colaborador["re"]."</p>";
        echo "<p>Nome completo: ".$colaborador["nome"]."</p>";
        echo "<p>Telefone: ".$colaborador["telefone"]."</p>";
        echo "<p>E-mail: ".$colaborador["email"]."</p>";
        echo "<p>Função: ".$colaborador["funcao"]."</p>";
        echo "<p>Salario Base: ".$colaborador["salario_base"]."</p>";
        echo "<p>Salario Final: ".$salario_liquido."</p>";
        echo "<p>VT: ".$vt."</p>";
        echo "<p>VR: 120</p>";
        echo "<p>INSS: ".$inss."</p>";
        echo "<p><a href='lista-colaboradores.php'>Voltar</a></p>";
    }
}