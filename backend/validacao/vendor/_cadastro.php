<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$confirmacao = $_POST['confirmacao'];


// elimina os erros mais comuns na digitação do email

$email = str_replace(" ", "", $email);
$email = str_replace("/", "", $email);
$email = str_replace("@.", "@", $email);
$email = str_replace(".@", "@", $email);
$email = str_replace(",", ".", $email);
$email = str_replace(";", ".", $email);
$erro=0;

if(empty($nome)){
    $erro= 1 ;
    $msg= "Por favor, digite seu nome corretamente.";
}

elseif(strlen($email) < 8 || substr_count($email, "@") != 1 || substr_count($email, ".") == 0){
    $erro=1;
    $msg = "por favor, escolha seu estado.";
}

elseif(strlen($login) < 5 || strlen($login) > 15){
$erro=1;
$msg = "O nome de usuario (login) deve ter entre 5 e 15 caracteres.";
}

elseif(strlen($estado) != 2){
    $erro = 1;
    $msg = "Por favor, escolha seu estado.";
}

elseif(strlen($login) < 5 || strlen($login) > 15){
$erro = 1;
$msg = "O nome de usuario (login) deve ter entre 5 e 15 caracteres.";
}

elseif(strstr($login, ' ')!= FALSE){
    $erro = 1;
    $msg= "O nome de usuario (login) não pode conter espaços em branco.";
}

elseif(strlen($senha) < 5 || strlen($sennha) > 10){
    $erro=1;
    $msg= "A senha de ter entre 5 e 10 caracteres.";
}

elseif(strstr($senha, ' ') != FALSE){
    $erro=1;
    $msg="A senha não pode conter espaços em branco.";
}

elseif($senha != $confirmacao){
    $erro = 1;
    $msg = "Voce digitou duas senhas diferentes.";
}

if($erro){
    echo "<html><body>";

    echo "<p>$msg</p>";
    echo "<p><a href='javascript:history.back()'>Voltar</p>";
    echo "</body></html>";
}

else{
    // tratar os dados aqui (ex. gravar no banco de dados)

    echo "<html><body>";
    echo "<p>seu cadastro foi realizado com sucesso!</p>";
    echo "</body></html>";
}
?>