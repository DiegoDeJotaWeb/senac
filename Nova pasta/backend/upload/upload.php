<?php
// elimina o limite de tempo de execução
set_time_limit(0);

// inclui o arquivo com as configurações
include "config_upload.php";

$nome_arquivo = $_FILES["arquivo"]['name'];
$tamanho_arquivo = $_FILES["arquivo"]['size'];
$arquivo_temporario = $_FILES["arquivo"]['tmp_name'];

if (!empty($nome_arquivo)) {
    if ($sobrescrever == "nao" && file_exists("$caminho_absoluto/$nome_arquivo")) {
        die("Arquivo já exixte");
    }
    if (($limite_tamanho == "sim") && ($tamanho_arquivo > $tamanho_bytes)) {
        die("Arquivo de ter maximo $tamanho_bytes bytes.");
    }

    $ext = strrchr($nome_arquivo, ".");
    if ($limitar_ext == "sim" && !in_array($ext, $extensoes_validas)) {
        die("Extenção de arquivo invalida para upload");
    }

    if (move_uploaded_file($arquivo_temporario, "$caminho_absoluto/$nome_arquivo")) {
        echo "<p>O upload do arquivo <br>" . $nome_arquivo. " foi concluido com sucesso.</p>";
        echo "<p><a href='index.php'>Novo upload </a></p>";
    }else{
        echo "<p>O arquivo não pode ser copiado para o servidor</p>";
    }
}else{
    die("Selecione o arquivo a ser enviado");
}
