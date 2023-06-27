<!-- Todo o html em uma variável. Se testar no xampp, deve exibir no navegador identico ao 
     exemplo_email.php - Para enviar por email seria somente usar o componente adequado para
     enviar a variável.-->
<?php
    texto=""
    texto=texto+"<html>"
    texto=texto+"<head>"
    texto=texto+"<title>Exemplo</title>"
    texto=texto+"</head>"
    texto=texto+"<body>"
    texto=texto+"<h1>Você está convidado</h1>"
    texto=texto+"<h2>Grande evento!</h2>"
    texto=texto+"<p>Semana da Administração de empresas</p>"
    texto=texto+"<p>O que teremos?</p>"
    texto=texto+"<ul>"
    texto=texto+"<li>Palestras;</li>"
    texto=texto+"<li>Jogos;</li>"
    texto=texto+"<li>Apresentação de novas tecnologias;</li>"
    texto=texto+"<li>E muito mais.</li>"
    texto=texto+"</ul>"
    texto=texto+"</body>"
    texto=texto+"</html>"
    echo texto
?>
        
    