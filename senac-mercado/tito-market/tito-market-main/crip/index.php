<?php

/* CRIPTOGRAFIA DE DADOS

- md5() ** Utilize mais com outro protocolo junto
- crypt()
- password_hash()
- sha1()
- base64() 
- 


*/

echo "<br>************* md5() ************<br>" ;

$texto = "Senha";

echo $texto;
echo "<br>";
echo md5($texto);
echo "<br><br>";


echo "<br>************* sha1() ************<br>" ;


$texto1 = "Senha";

echo $texto1;
echo "<br>";
echo sha1($texto1);
echo "<br><hr>";


echo "<br>************* crypt() ************<br>" ;

$palavraChave = "teste@";
$senha = "1234";

echo "<br>";
echo crypt($palavraChave,$senha);


echo "<br><hr>";


echo "<br>************* password_hash() ************<br>" ;

$senha = "1234";
$option = [
  'cost' => 12
];


echo "<br>";
echo password_hash($senha,PASSWORD_BCRYPT,$option);
echo "<br><hr>";


echo "<br>************* base64() ************<br>" ;

$texto3 = "Textos";


echo $texto3;
echo "<br>";
echo base64_encode($texto3);
echo "<br>";
echo base64_decode($texto3);
echo "<br><hr>";


?>