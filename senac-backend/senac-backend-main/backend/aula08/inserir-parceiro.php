<?php
include_once("config/conexao.php");

if (($_POST)) {
    
    $razaoSocial = $_POST["razao_social"];
    $nomeFantasia = $_POST["nome_fantasia"];
    $inscricaoEstadual = $_POST["inscricao_estadual"];
    $inscricaoMunicipal = $_POST["inscricao_municipal"];



    // Criação da HASH - DATA razaoSocial E nomeFantasia
    $token_parceiro = sha1(md5(date('d/m/y') . $razaoSocial . $nomeFantasia));



    $query = "INSERT INTO tbl_parceiros(razao_social, nome_fantasia, ie,im, id_situacao, `hash`) 
            VALUES ('$razaoSocial', '$nomeFantasia', '$inscricaoEstadual', '$inscricaoMunicipal', 1,  '$token_parceiro')";

    $inserir = mysqli_query($conexao, $query);
    if ($inserir) {
        header("Location: completar_cadastro_parceiro.php?parceiro=".$token_parceiro);
    } else {
        header("Location: cadastro_parceiro.php");
    }
} else {
    header('Location: cadastro_parceiro.php');
}
