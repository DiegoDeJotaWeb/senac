<?php

/**
 * Criptografia de dados
 * 
 * MDS**Utilize mas com outro protocolo junto
 * CRYPT()
 * SHAL()
 * BASE64()
 * BCRYPT()
 * */

$texto = "Senha";

echo $texto."<br>";
echo shal($texto)

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "--------------------------------------------";

$palavraChave = "trstfd@25!2023";
$senha = "1234";

echo crypt($senha, $palavraChave);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "---------------------------------------------";

$senha = "1234";
$options = [
    'cost' => 12,
]

echo password_hash($senha, PASSWORD_BCRYPT, $options);

echo "--------------------------------------------";

$texto = "Textos";

echo $texto."<br>";
echo base64_encode($texto);

echo "---------------------------------------------------";

$texto = "Texto";
