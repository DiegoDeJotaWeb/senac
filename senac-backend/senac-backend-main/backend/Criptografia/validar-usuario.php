<?php

include_once("config/conexao.php");

if($_POST){

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $queryUsuario = "SELECT * FROM tbl_acessos WHERE usuario = '$usuario' ";
    $consultarUsuario = mysqli_query($conexao, $queryUsuario);

    $resultadoConsulta = mysqli_fetch_all($consultarUsuario, MYSQLI_ASSOC);

    if($resultadoConsulta){

        $salt = md5($usuario.$senha);
        $custo = "06";
        $senhaHash = crypt($senha, "$2b$" .$custo. "$" .$salt. "$");

        $compararSenha = hash_equals($resultadoConsulta[0]["senha"], $senhaHash);

        if($compararSenha){

            echo "Sim";

        }else{

            echo "Não";

        }

    }



}else{

}