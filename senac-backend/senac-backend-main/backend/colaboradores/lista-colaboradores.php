<?php

include_once('dados-colaboradores.php');
    //require_onde 'dados-alunos.php';


echo "<h1>Ver Aluno</h1>";

echo "<table>";

    echo "<thead>";
        echo "<tr>";
            echo "<th>RE</th>";
            echo "<th>Nome Completo</th>";
            echo "<th>Telefone</th>";
            echo "<th>E-Mail</th>";
            echo "<th>Função</th>";
            echo "<th>Salario Base</th>";
            echo "<th>Data Admissão</th>";
        echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    echo "<tr>";
        foreach($dados_colaboradores as $colaboradores){
        
            echo "<tr>";
                echo "<td>".$colaboradores['re'] ."</td>";
                echo "<td>".$colaboradores['nome'] ."</td>";
                echo "<td>".$colaboradores['telefone'] ."</td>";
                echo "<td>".$colaboradores['email'] ."</td>";
                echo "<td>".$colaboradores['funcao'] ."</td>";
                echo "<td>".$colaboradores['salario_base'] ."</td>";
                echo "<td>".$colaboradores['data_admissao'] ."</td>";
                echo "<td>
                        <a href='salarios.php?re=".$colaboradores["re"]."'>
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
        }
        </style>";