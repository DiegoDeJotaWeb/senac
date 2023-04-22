<?php

include_once('dados-usuarios.php');

echo "<h1>Ver Usuarios</h1>";

echo "<table>";

    echo "<thead>";
        echo "<tr>";
            echo "<th>ID Usuario</th>";
            echo "<th>1º Nome</th>";
            echo "<th>2º Nome</th>";
            echo "<th>Sobrenome</th>";
            echo "<th>Idade</th>";
            echo "<th>Genero</th>";
            echo "<th>E-mail</th>";
            echo "<th>Telefone</th>";
            echo "<th>UserName</th>";
            echo "<th>Data de Nasc.</th>";
            echo "<th></th>";
        echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    echo "<tr>";
        foreach($dados_usuarios as $usuario){
        
            echo "<tr>";
                echo "<td>".$usuario['id'] ."</td>";
                echo "<td>".$usuario['firstName'] ."</td>";
                echo "<td>".$usuario['lastName'] ."</td>";
                echo "<td>".$usuario['maidenName'] ."</td>";
                echo "<td>".$usuario['age'] ."</td>";
                echo "<td>".$usuario['gender'] ."</td>";
                echo "<td>".$usuario['email'] ."</td>";
                echo "<td>".$usuario['phone'] ."</td>";
                echo "<td>".$usuario['username'] ."</td>";
                echo "<td>".$usuario['birthDate'] ."</td>";
                echo "<td>
                        <a href='ver-pedido.php?id=".$usuario["id"]."'>
                            Ver Dados
                        </a>
                    </td>";
            echo "</tr>";
        };
        echo "</tr>";
    echo "</tbody>";
echo "</table>";

echo "<style>
        th{
            border: 1px solid black;
            padding: 2px 10px;
        }
        td{
            padding: 5px 15px;
            text-align: center;
            border: 1px solid black;
        }
        </style>";
echo "<hr>";

echo "<h3><a href='lista-produtos.php'>vitrine</a></h3>";