<?php

include_once('dados-alunos.php');
    //require_onde 'dados-alunos.php';


echo "<h1>Ver Aluno</h1>";

echo "<table>";

    echo "<thead>";
        echo "<tr>";
            echo "<th>RA</th>";
            echo "<th>Nome Completo</th>";
            echo "<th>E-Mail</th>";
            echo "<th>Telefone</th>";
            echo "<th>Curso</th>";
            echo "<th>Ações</th>";
        echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    echo "<tr>";
        foreach($dados_alunos as $aluno){
        
            echo "<tr>";
                echo "<td>".$aluno['ra'] ."</td>";
                echo "<td>".$aluno['nome'] ."</td>";
                echo "<td>".$aluno['email'] ."</td>";
                echo "<td>".$aluno['telefone'] ."</td>";
                echo "<td>".$aluno['curso'] ."</td>";
                echo "<td>
                        <a href='ver-aluno.php?ra=".$aluno["ra"]."'>
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