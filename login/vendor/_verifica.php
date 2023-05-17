<?php

include_once './../config/_conecta.php';


if (isset($_POST['usuario']) || isset($_POST['senha'])) {
    // if (isset($_POST['usuario'])) {
    //     echo "Preencha o campo email";
    // } else if (strlen($_POST['senha'])) {
    //     echo "Preencha o campo senha";
    // } else {
        $usuario = $conn->real_escape_string($_POST['usuario']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql = "SELECT * FROM usuario WHERE nomeUser = '$usuario' AND senhaUser = '$senha'";
        $sql_query = $conn->query($sql) or die('Falha no login!');

        $qtd = $sql_query->num_rows;
       

        if ($qtd == 1) {
            $user = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $user['idUser'];
            $_SESSION['nome'] = $user['nomeUser'];

        
            echo $_SESSION['nome'];

       header("Location: ./../painel.php");
        }
    }
// } 
else {

    echo "Falha ao logar";
}
