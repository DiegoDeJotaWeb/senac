<?php
include_once("config/conexao.php");

if ($_POST) {
    
    $token_cliente = $_POST["id-client"];
    echo $token_cliente;
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $senha = $_POST["senha"];

    //consulta de dados para bloqueio de duplicidade de email

    $queryConsultaEmail = "SELECT * FROM tbl_acessos WHERE usuario = '$email'";

    $resultadoEmail = mysqli_query($conexao, $queryConsultaEmail);
    $dadosEmail = mysqli_fetch_all($resultadoEmail, MYSQLI_ASSOC);

    if($dadosEmail){
        header("Location: completar_cadastro.php?client=$token_cliente&msg=email");
        exit;
    }

    //Palavra chave - EMAIL E SENHA
    $salt = md5($email.$senha);
    $custo = "06";
    $senha_segura = crypt($senha, '$2b$'. $custo . '$'.  $salt . '$');

    $queryConsultaToken = "SELECT * FROM tbl_clientes WHERE `hash` = '$token_cliente'";
    $resultado = mysqli_query($conexao, $queryConsultaToken);
    $dados_cliente = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    $id = $dados_cliente[0]['id_cliente'];


    $queryDocs = "INSERT INTO tbl_docs(hash_usuario, documento, id_tipo_documento)
                    VALUES('$token_cliente', '$cpf', 1), ('$token_cliente', '$rg', 2)";

    $inserirDocs = mysqli_query($conexao, $queryDocs);
    if ($inserirDocs) {
    $queryEmail = "INSERT INTO tbl_contatos_emails(hash_usuario, email)
                    VALUES ('$token_cliente', '$email')";
    $inserirEmail = mysqli_query($conexao, $queryEmail);

    if ($inserirEmail) {
        $queryTelefone = "INSERT INTO tbl_contatos(hash_usuario, numero) 
                            VALUES('$token_cliente', '$celular')";
        $inserirTelefone = mysqli_query($conexao, $queryTelefone);
    
    if ($inserirTelefone) {
        $queryAcesso= "INSERT INTO tbl_acessos(hash_usuario, usuario, senha, id_situacao) 
        VALUES ('$token_cliente', '$email', '$senha_segura', 1 )";
     
        echo $queryAcesso;

        $inserirAcesso = mysqli_query($conexao, $queryAcesso);

        echo "<pre>";
        print_r($inserirAcesso);

        echo "</pre>";
     
        if($inserirAcesso){

            header("Location: index.php");

        }else{
            header("Location: completar_cadastro.php?client=" .$token_cliente);

        }
        
    }else{
        header("Location: completar_cadastro.php?client=" .$token_cliente);
            }
        
         }else{
            header("Location: completar_cadastro.php?client=".$token_cliente);
                }
        
    }
    
}else{
    header("location: cadastro_cliente.php");
}


