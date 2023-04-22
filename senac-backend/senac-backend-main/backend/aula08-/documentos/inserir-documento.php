<?php
include_once("../config/conexao.php");

if($_POST){

$token_client = $_POST["id_client"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$email = $_POST["email"];
$senha = $_POST["senha"];
//palavra Chave - Email + Senha
$salt = md5($email, $senha);
$custo = "06";
$senhaHash = crypt($senha . "$2b$" . $custo . "$" . $salt . "$" );

$celular = $_POST["celular"];

//----------------------------------------------------------------------------------------------------------------
$queryConsultaToken = "SELECT * FROM tbl_clientes WHERE 'hash' = '$token_client'";
$resultado = mysqli_query($conexao, $queryConsultaToken);
$dados_cliente = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
$id = $dados_cliente[0]["id"];

$queryDocs = "INSERT INTO tbl_docs(documento, id_tipo_documento) VALUES ('$id', '$cpf', '), ('$id', '$rg', 2)";
$inserirDocs = mysqli_query($conexao, $queryDocs);

if($inserirDocs){
    $queryEmail = "INSERT INTO tbl_contatos_emails(id_usuario, email) VALUES ('$id', '$email')";
    $inserirEmail = mysqli_query($conexao, $queryEmail);

    if($inserirEmail){
        $queryTelefone = "INSERT INTO tbl_contatos(id_usuario, numero) VALUES ('$id', '$celular')";
        $inserirTelefone = mysqli_query($conexao, $queryTelefone);
        
    }if($inserirTelefone){
        $queryAcesso = "INSERT INTO tbl_acessos(id_usuario, usuario, senha, id_situacao) VALUES ('$id', '$email', '$senhaHash', 1)";
        $inserirAcesso = mysqli_query($conexao, $queryAcesso);

        if($inserirAcesso){
            header("location: ../index.php");
        }else{
            header("Location: completar-cadastro.php?client="$token_client);
        }
    }else{
        header("location: completar-cadastro.php?client="$token_client);
    }

}else{

}

}else{
    header("location: completar-cadastro.php?client="$token_client);
}