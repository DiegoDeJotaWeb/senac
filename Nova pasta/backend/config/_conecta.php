<?php
$servidor = "localhost";
$user = "root";
$senha = "";
$banco = "livros";

$conn = new mysqli($servidor,$user,$senha,$banco);

if($conn->connect_errno){
    echo "Falha ao conectar:(" . $conn->connect_errno . ") " . $conn->connect_error;   
}else{
    // echo "Conectado com sucesso! ";
}
