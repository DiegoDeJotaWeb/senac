<?php
include 'Class/Endereco.php';

$endereco = new Endereco("Rua Teste",176);


$endereco->setNome("diego");
echo $endereco->getNome();

$endereco->setLogradouro("Rua Teste");



echo $endereco->getLogradouro();

$endereco->setNumero("176");

echo $endereco->getNumero();

?>