<?php
include "./../config/_conecta.php";

$query = "DELETE FROM livros WHERE isbn = '" . $_POST["isbn"] . "'";
echo $query;

if(mysqli_query($conn, $query)){
    $mensagem = "Excluir com sucesso";
}else{
    echo "Falha ao excluir! " . mysqli_error($conn);
}

echo $mensagem;

$result = mysqli_query($conn, "SELECT * FROM livros WHERE isbn = '" . $_POST['isbn'] . "'");

?>
<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td>ISBN</td>
                    <td>Titulo</td>
                    <td>Autor</td>
                    <td>Paginas</td>
                    <td>Preço</td>
                </tr>
            </thead>

            <tbody>
                <?php while ($dados = $result->fetch_array()) { ?>
                    <tr>
                        <td><?php echo $dados["isbn"]; ?></td>
                        <td><?php echo $dados["titulo"]; ?></td>
                        <td><?php echo $dados["autor"]; ?></td>
                        <td><?php echo $dados["paginas"]; ?></td>
                        <td><?php echo $dados["preco"]; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <p><a href="livros.html">Voltar</a></p>
    </div>

    tabnine al