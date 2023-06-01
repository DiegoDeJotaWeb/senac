<?php


require_once "painel/class/User-class.php";
$class = new User();
$class->login();

echo "<pre>";
var_dump($class->login());
echo "</pre>";
?>
