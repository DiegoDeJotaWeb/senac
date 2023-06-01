<?php
include './../config/_conecta.php';


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if (empty($usuario) || empty($senha)) {
    echo "<script>alert('Usuário ou senha não pode estar em branco!');
        window.location.href='./../cadastro-user.php';</script>";
} else {
    $consulta = "SELECT * FROM usuario WHERE nomeUser = '$usuario'";

    $queryUser = $conn->query($consulta);
    $row_cnt = $queryUser->num_rows;


    if ($row_cnt > 0) {
        echo "<script>alert('Usuário já existe!');
        window.location.href='./../cadastro-user.php';</script>";
    } else {
        $query = "INSERT INTO usuario(nomeUser,senhaUser)VALUES('$usuario','$senha')";

        if ($conn->query($query)) {
            echo "Registro inserido com sucesso!";
        } else {
            echo "Erro ao registrar";
        }
    }
}


