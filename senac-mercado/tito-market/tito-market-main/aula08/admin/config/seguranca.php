<?php 

// garantir a segurança ma entrega de informções apenas para usuario autenticar e verificados no PHP

session_start();

if($_SESSION['ID_USUARIO_ADMIN']){

}else{
    header("Location: ../login.php");
}
?>