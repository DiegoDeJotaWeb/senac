<?php

include('conexao.php');


if($_POST['id']){

    $id_aluno = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data = $_POST['data-nasc'];
   

    $query = "UPDATE  tbl_alunos SET nome = '$nome', sobrenome = '$sobrenome', data_nascimento = '$data' WHERE cod_aluno = $id_aluno";
    $excluir = mysqli_query($conexao, $query);

    if($excluir){
        echo "Aluno editado com sucesso!
        <a href='listar-aluno.php'>Voltar</a>";
    }else{
        echo "Erro ao editar o aluno
        <a href='editar-aluno.php?id=$id_aluno'>Voltar</a>
        ";
    }

}else{
    echo "Por favor informar um ra para exclusão";
}
?>