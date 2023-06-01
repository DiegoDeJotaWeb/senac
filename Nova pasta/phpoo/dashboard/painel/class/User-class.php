<?php
require_once 'Database.php';

class User extends PdoConexao
{

  public function __construct()
  {
    parent::getInstancia();
  }



  public function criar()
  {
   
    $database = PdoConexao::getInstancia();

    $database = $this->getInstancia();

    $salt = md5($_POST['email'] . $_POST['senha']);
    $custo = "06";
    $senhaHash = crypt($_POST['senha'], "$2b$" . $custo . "$" . $salt . "$");

    $sql = "insert into usuarios(nomeUsuario,emailUsuario,senhaUsuario) values ('{$_POST['nome']}','{$_POST['email']}','{$senhaHash}')";
    $database->query($sql);
  }

  public function verTudo()
  {
    
    $database = PdoConexao::getInstancia();
    $database = $this->getInstancia();

    $sql = "select * from usuarios";
    $read = $database->query($sql);

    $students = [];


    while ($row = $read->fetch(PDO::FETCH_ASSOC)) {
      // while ($row = mysqli_fetch_array($read)) {
      $students[] = $row;
    }

    return $students;
  }

  public function ver($id)
  {
  
    $database = PdoConexao::getInstancia();

    $database = $this->getInstancia();
    $sql = "select * from usuarios where idUsuario = '{$id}'";
    $read = $database->query($sql);
    $student = $read->fetch(PDO::FETCH_ASSOC);
    return $student;
  }


  public function editar()
  {
    parent::getInstancia();
    $database = PdoConexao::getInstancia();

    $database = $this->getInstancia();

    $salt = md5($_POST['email'] . $_POST['senha']);
    $custo = "06";
    $senhaHash = crypt($_POST['senha'], "$2b$" . $custo . "$" . $salt . "$");

    if ($_POST['senha'] == "") {
      $sql = "update usuarios set 
      nomeUsuario = '{$_POST['nome']}', 
      emailUsuario = '{$_POST['email']}'
      
      where idUsuario = '{$_POST['id']}'";
      $database->query($sql);

     
    } else {
      $sql = "update usuarios set 
      nomeUsuario = '{$_POST['nome']}', 
      emailUsuario = '{$_POST['email']}', 
      senhaUsuario = '$senhaHash'
      
      where idUsuario = '{$_POST['id']}'";
      $database->query($sql);
    }
  }

  public function deletar()
  {
    parent::getInstancia();
    $database = PdoConexao::getInstancia();

    $database = $this->getInstancia();
    $sql = "delete from usuarios where idUsuario='{$_POST['id']}'";
    $database->query($sql);
  }

  public function criarUser()
  {
    parent::getInstancia();
    $database = PdoConexao::getInstancia();

    $database = $this->getInstancia();
    //criar um usuario administrador
    $senha_crip = md5('admin');
    //echo $senha_crip;
    $query = $database->query("select * from usuarios");

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $total_result = count((array)$result);
    if ($total_result == 0) {
      $email = "digital@digitalspacesw.com.br";
      $senha = "1234";

      $salt = md5($email . $senha);
      echo $salt . "<br>";
      $custo = "06";
      $senhaHash = crypt($senha, "$2b$" . $custo . "$" . $salt . "$");

      $database->query("insert into usuarios(nomeUsuario,emailusuario,senhaUsuario)
    values
    ('admin','$email', '$senhaHash');");
    }
  }

  public function login()
  {
    // parent::getInstancia();
    $database = PdoConexao::getInstancia();

    $database = $this->getInstancia();
    session_cache_limiter('private');
    $cache_limiter = session_cache_limiter();

    session_cache_expire(120);
    $cache_expire = session_cache_expire();


    @session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    // echo $email;
    // echo '<br>';
    // echo $senha;
    // echo '<br>';
    $salt = md5($email . $senha);
    $custo = "06";
    $senhaHash = crypt($senha, "$2b$" . $custo . "$" . $salt . "$");
    // echo '<br>';
    // echo $senhaHash;

    $query = $database->prepare("select * from usuarios where (emailUsuario = :email) and senhaUsuario = :senha");



    $query->bindValue(":email", "$email");
    $query->bindValue(":senha", "$senhaHash");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    // $result = $query->fetch_assoc();;
    // var_dump($result);
    $total_result = @count($result);
    // print_r( $total_result."teste"); 

    if ($total_result > 0) {
      $_SESSION['id_admin'] = $result[0]['idUsuario'];
      echo  $_SESSION['nome_admin'] = $result[0]['nomeUsuario'];
      $_SESSION['email_admin'] = $result[0]['emailUsuario'];
      echo "<script>window.location='painel';</script>";
    } else {
      echo "<script>window.alert('Dados incoretos');</script>";
      echo "<script>window.location='index.php';</script>";
      // header('Location:index.php');
    }
  }
}
