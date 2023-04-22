<?php

// var_dump($_POST);

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if($nome == ""){
    echo "Preencha o campo Nome";
}elseif($sobrenome == ""){
    echo "Preencha o campo Sobrenome";
}elseif($email == ""){
    echo "Preencha o campo E-mail";
}elseif($senha == ""){
    echo "Preencha o campo Senha";
}else{
    echo "Caro sr $nome, seus dados foram enviador com sucesso";
}