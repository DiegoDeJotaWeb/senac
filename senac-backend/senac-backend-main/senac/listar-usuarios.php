<style>
    /* table{
        width: 100%;
    }
    table,td,tr,thead,tbody,th{
        border: 1px solid black;
        border-collapse:collapse ;

    } */
</style>
<?php


include('header.php');

    include_once('dados-usuarios.php');
    // require_once 'dados-alunos.php';

    echo "<h2>Lista de usuários</h2>";

    echo "
    <table class='table'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagem</th>
                <th>Primeiro nome</th>
                <th>Sobrenome</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>teste</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>User name</th>
                <th>Senha</th>
                <th>Data nascimento</th>
                
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
    ";
    
    
    foreach($dados_usuarios as $usuario){
      
            echo "<tr>";
            echo "<td> " . $usuario['id'].  "</td>";
            echo "<td> <img src='". $usuario['image'].    "' style='width:50%'></td>";
            echo "<td> " . $usuario['firstName'].  "</td>";
            echo "<td>" . $usuario['lastName'].  "</td>";
            echo "<td> " . $usuario['maidenName'].  "</td>";
            echo "<td> " . $usuario['age'].  "</td>";
            echo "<td> " . $usuario['gender'].  "</td>";
            echo "<td> " . $usuario['email'].  "</td>";
            echo "<td> " . $usuario['phone'].  "</td>";
            echo "<td> " . $usuario['username'].  "</td>";
            echo "<td> " . $usuario['password'].  "</td>";
            echo "<td> " . $usuario['birthDate'].  "</td>";
            echo "<td> <a href='ver-usuario.php?id=". $usuario['id'] ."'><i class='fa-solid fa-eye'></i> </a></td>";
            echo "</tr>";
    }
    
    echo "
        </tbody>
    </table>
    ";
    

    include('footer.php');
?>