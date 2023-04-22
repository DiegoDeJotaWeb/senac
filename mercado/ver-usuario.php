<style>
    table {
        width: 100%;
    }

    table,
    td,
    tr,
    thead,
    tbody,
    th {
        border: 1px solid black;
        border-collapse: collapse;

    }
</style>
<?php include('header.php');
include('dados-usuarios.php');
include('dados-carrinho.php');



$id = $_GET['id'];




// for ($i = 0; $i < count($dados_carrinho); $i++) {

// if($id =  $dados_carrinho[$i]){
//         print_r($dados_carrinho[$i]);
//     // for($i2 = 0; $i2 < count($dados_carrinho); $i2++){
//     //     print_r($dados_carrinho[$i2]['products'][$i2]['id']) ;
//     // }

 
// }


// print_r($dados_carrinho[$i]['userId']) ;
// echo "<br>";

//     if($id = $dados_carrinho[$i]['userId']){
// echo "tem";
//     }else{
//         echo "não tem";
//     }



    // echo "<pre>";
    // var_dump($dados_carrinho[$i]['products'][$i]['title']);
    // echo "</pre>";
// }



// for ($i = 0; $i < count($dados_carrinho); $i++) {



//     for ($i2 = 0; $i2 < count($dados_carrinho); $i2++) {
//         if ($id = $dados_carrinho[$i2]['userId']) {
//             echo "<pre>";
//             var_dump($dados_carrinho[$i2]['products'][$i2]['id']);
//             echo "</pre>";
//         } else {
//             echo "Não a nada no carrinho";
//         }



//         // echo "<pre>";
//         //         // var_dump($dados_carrinho[$i]['products']['id']);
//         //         var_dump($dados_carrinho[$i]['products']);
//         //         echo "</pre>";
//     }
// }

// foreach ($dados_carrinho as $carrinho) {
//     if($id = $dados_carrinho[0]['userId']){
//         echo "<pre>";
//         var_dump($dados_carrinho);
//         echo "</pre>";


//     }
// }

// $id = $_GET['id'];

// echo "<pre>";
// var_dump($dados_carrinho[0]["userId"]);
// echo "</pre>";

// if($id = $dados_carrinho[0]['userId']){
//     echo "<pre>";
//     var_dump($dados_carrinho[0]['userId']);
//     echo "</pre>";

//     // echo $dados_carrinho[0]['title'];
// }

echo "<h2>Detalhe usuário</h2>";

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


foreach ($dados_usuarios as $usuario) {
    if ($usuario["id"] == $id) {
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
        echo "<td > 
        <a href='listar-usuarios.php'> <i class='fa-solid fa-left-long'></i></a>  ";

         foreach ($dados_carrinho as $carrinho) {
            if($carrinho['id'] == $id){
                echo "<a href='carrinho.php?id=". $carrinho['id'] ."'><i class='fa-solid fa-cart-shopping'></i></a> </td>";     
        
            }
        }

        
        echo "</tr>";
     
    }
}

echo "
    </tbody>

</table>
";

include('footer.php');