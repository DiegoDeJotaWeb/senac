<?php
session_start();

if($_SESSION['id_admin'] == ''){
    echo "<script>window.location='../kkkindex.php';</script>";
}


?>

