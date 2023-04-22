<?php //Requisições GET ?>

<form method="GET">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario">
    <label for="senha">Senha</label>
    <input type="password" name="senha"> 
    <button>Acessar</button>
</form>

<?php

if(isset($_GET['usuario']) && isset($_GET['senha'])){
    echo $_GET['usuario'];
    echo $_GET['senha'];
}else{
    echo "Digite as Informações no Formulário";
}

?>

<?php //Requisições POST ?>

<form method="POST">
    <h3>Requisições POST</h3>
    <label for="bim1">Bim 1</label>
    <input type="number" name="bim1">
    
    <label for="bim2">Bim 2</label>
    <input type="number" name="bim2">
    
    <label for="bim3">Bim 3</label>
    <input type="number" name="bim3">
    
    <label for="bim4">Bim 4</label>
    <input type="number" name="bim4">

    <button>Enviar</button>
</form>


<?php
// var_dump($_POST);

echo "<p>B1:" .@$_POST['bim1']."</p>";
echo "<p>B2:" .@$_POST['bim2']."</p>";
echo "<p>B3:" .@$_POST['bim3']."</p>";
echo "<p>B4:" .@$_POST['bim4']."</p>";

echo $media = (@$_POST['bim1'] +
                @$_POST['bim2'] +
                @$_POST['bim3'] +
                @$_POST['bim4'] ) / 4;

?>