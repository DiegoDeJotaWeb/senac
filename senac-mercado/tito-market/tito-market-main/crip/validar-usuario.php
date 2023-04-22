<?php

include_once('config/conexao.php');


if($_POST){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $queryUsuario = "SELECT * FROM tbl_acessos WHERE usuario = '$usuario'";

    $consultaUsuario = mysqli_query($conexao,$queryUsuario);

    $resultado = mysqli_fetch_all($consultaUsuario, MYSQLI_ASSOC);



if($resultado){
    //verifica senha 

    $salt = md5($usuario.$senha);
    $custo = "06";
    $senhaHash = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');
    // echo $senhaHash

    $compararSenha = hash_equals($resultado[0]["senha"], $senhaHash);

    if( $compararSenha){
        echo "Usuário autenticado";
    }else{
        echo "Usuário e/ou senha inválidos";
    }

}


}

?>