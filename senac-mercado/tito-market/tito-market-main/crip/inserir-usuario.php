<?php
include_once("./config/conexao.php");

if($_POST){
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// CRIPTOGRAFAR SENHA
// CRIPT(senha,options)

$salt = md5($usuario.$senha);
$custo = "06";
$senhaHash = crypt($senha, '$2b$' . $custo . '$' . $salt . '$');



$query = "INSERT INTO tbl_acessos(usuario,senha)VALUES('$usuario','$senhaHash')";

$inserir_user = mysqli_query($conexao,$query);

if($inserir_user){
    echo "Usuário cadastrado com sucesso!";
    }else{
      echo "Não foi possivel cadastrar o usuário";
    }

}else{
    
}