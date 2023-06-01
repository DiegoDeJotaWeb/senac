<?php
$email_destino = array(
    "pergunta" => "",
    "reclamacao" => "",
    "suporte" => "",
    "publicacao" => "",
    "webmaster" => "",
);

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['assunto']) && isset($_POST['mensagem'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
}else{
    echo "Todos os campos devem ser preenchidos!";
    exit;
}

$msg = "Nome do usuario: $nome\n";
$msg .= "E-mail: $email\n";
$msg .= "Mensagem: $mensagem\n";
mail($email_destino($assunto), "mensagem do usuario", $msg, "From: email@email.com","-r email@email.com" );

echo "Sua mensagem foi enviado com sucesso";

?>