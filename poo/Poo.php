<!-- Esruturando class -->
<!-- Sintaxe para criar uma class -->
<!-- Class, seguido do nome da classe e um par de chaves ("{}"):  -->


<?php
class MinhaClass1
{
    // Propriedades e metodos da Classe vem aqui 
}
?>

<!-- Instanciada e guarda variavel usando a palavra chave new -->

$obj = new MinhaClass;

<!-- Visualilador conteudo da classem usando var_dump()  -->

<!-- Exemplo completo de class e instancia de Objeto recebendo valor minhaClass.php -->


<?php
class MinhaClass2
{
    // As propriedades e metodos da Classe vem aqui
}

$obj = new MinhaClass2;
var_dump($obj);
echo '<br>';
?>

<!-- Definindo as propriedade da classe  -->
<!-- Usamos ass propriedades, que são variaveis especificas a classe  -->

<?php
class MinhaClass3
{
    public $obj = "Sou uma propriedade de classe";
}
$obj = new MinhaClass3;
var_dump($obj);
echo '<br>';
?>

<!-- Definindo as propriedades da classe  -->
<!-- Usamos as propriedades, que são variaveis especificas a class -->

<!-- Funcionalidades particulares que os objetos serão capazes de executar, são definidas dentro das classes na forma de metodos -->

<?php
class MinhaClass4
{
    public $obj = "Sou uma propriedade de classe";
}
$obj = new MinhaClass4;
var_dump($obj);
echo '<br>';
?>

<!-- Para ver o valor da propriedade  -->
<!-- echo $obj->prop1; -->
<!-- O uso da flecha (->) e um construto de POO -->

<?php
class MinhaClass5
{
    public $prop1 = "Sou uma propriedade de classe";
}
$obj = new MinhaClass5;
echo $obj->prop1; // Mostra a saida/ conteudo da propriedade
echo '<br>';
?>

<!-- Definindo metodos de classe -->
<!-- Metodos são funções especificas das classes -->

<?php
class MinhaClass6
{
    public $prop1 = "Sou uma propriedade de classe";
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }
    public function getProperty()
    {
        return $this->prop1 . "<br>";
    }
}
$obj = new MinhaClass6;
echo $obj->prop1;
echo '<br>';
?>

<!-- "this" permite que os objetos referenciem-se usando $this. 
Quando estiver dentro, use $this da mesma forma que voce usaria o nome do objeto fora da classe -->



<?php
class MinhaClass7
{
    public $prop1 = "Sou uma propriedade de classe";
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }

    public function getProperty()
    {
        return $this->prop1 . "<br>";
    }
}

$obj = new MinhaClass7;
echo $obj->getProperty(); // le e o valor da propriedade
$obj->setProperty("Sou uma nova propriedade!"); //Atribui um novo valor
echo $obj->getProperty(); //Le o valor novamente para mostrar a mudança 
echo '<br>';
?>

<!-- O poder de orientação objeto mostra-se ao usar multiplas instancias da mesma classe -->

<?php
class MinhaClass8
{
    public $prop1 = "Sou uma propriedade de classe";
    public function setProperty($newval)
    {
        $this->prop1 = $newval;
    }
    public function getProperty()
    {
        return $this->prop1 . "<br>";
    }
}

// Create two objects

$obj = new MinhaClass8();
$obj2 = new MinhaClass8();

// mostra o valor de $pro1 de ambos os objetos

echo $obj->getProperty();
echo $obj2->getProperty();

// Atribui novos valores para ambos os objetos

$obj->setProperty("Sou um novo valor de propriedade!");
$obj2->setProperty("Pertença a segunda instancia");

// mostra o valor de $prop1 de ambos os objetos

echo $obj->getProperty();
echo $obj2->getProperty();

echo '<br>';
?>


<!-- Usando construtores e destruidores 
O metodo construtor de uma classe sempre é executado quando um objeto da classe é instanciado. É um tipo especial de função do PHP. Normalmente o programador utiliza o método construtor para inicializar os atributos de um objeto, como por exemplo: Estabelecer conexão com um banco de dados, abertura de um arquivo que será utilizado para escrita
-->

<?php
class MinhaClass9
{
    public $prop1 = "Sou uma propriedade de classe";
    public function __construct()
    {
        echo 'A classe "' , __CLASS__ , ' " foi instanciada! <br>';        
    }

    public function setProperty($newval){
        $this->prop1 = $newval;
    }

    public function getProperty(){
        return $this->prop1 . "<br>";
    }
}

// Cria um novo objeto

$obj = new MinhaClass9();
// Mostra uma mensagem ao final do arquivo

echo "Fim do arquivo. <br>";
?>

<!-- __CLASS__ retorna o nome da classe na qual foi usada, função quando um objeto for destruido -->

<!-- chamar uma função quando um objeto for destruido -->

<!-- O metodo __destruct() funciona como um finalizador e, é executado ao finalizarmos um objeto, ou seja, quando o objeto, ou seja, quando o objeto é desalocado da memoria, quando atribuimos NULL ao objeto, quando usamos a função unset() no objeto, ou tambem quando o programa é fechado




-->


