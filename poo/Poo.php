<!-- Esruturando class -->
<!-- Sintaxe para criar uma class -->
<!-- Class, seguido do nome da classe e um par de chaves ("{}"):  -->


<?php
class MinhaClass
{
    // Propriedades e metodos da Classe vem aqui 
}
?>

<!-- Instanciada e guarda variavel usando a palavra chave new -->

$obj = new MinhaClass;

<!-- Visualilador conteudo da classem usando var_dump()  -->

<!-- Exemplo completo de class e instancia de Objeto recebendo valor minhaClass.php -->


<?php
class MinhaClass
{
    // As propriedades e metodos da Classe vem aqui
}

$obj = new MinhaClass;
var_dump($obj);
?>

<!-- Definindo as propriedade da classe  -->
<!-- Usamos ass propriedades, que são variaveis especificas a classe  -->

<?php
class MinhaClass
{
    public $obj = "Sou uma propriedade de classe";
}
$obj = new MinhaClass;
var_dump($obj);
?>

<!-- Definindo as propriedades da classe  -->
<!-- Usamos as propriedades, que são variaveis especificas a class -->

<!-- Funcionalidades particulares que os objetos serão capazes de executar, são definidas dentro das classes na forma de metodos -->

<?php
class MinhaClass
{
    public $obj = "Sou uma propriedade de classe";
}
$obj = new MinhaClass;
var_dump($obj);
?>

<!-- Para ver o valor da propriedade  -->
<!-- echo $obj->prop1; -->
<!-- O uso da flecha (->) e um construto de POO -->

<?php
class MinhaClass
{
    public $prop1 = "Sou uma propriedade de classe";
}
$obj = new MinhaClass;
echo $obj->prop1; // Mostra a saida/ conteudo da propriedade
?>

<!-- Definindo metodos de classe -->
<!-- Metodos são funções especificas das classes -->

<?php
class MinhaClass
{
    public $prop1 = "Sou um propriedade de classe";
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }
    public function getProperty()
    {
        return $this->prop1 . "<br>";
    }
}
$obj = new MinhaClass;
echo $obj->prop1;

?>

<!-- "this" permite que os objetos referenciem-se usando $this. 
Quando estiver dentro, use $this da mesma forma que voce usaria o nome do objeto fora da classe -->