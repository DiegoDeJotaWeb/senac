<?php
class Login extends PdoConexao
{

    public function login()
    {
      $database = PdoConexao::getInstancia();
  
      $database = $this->getInstancia();
      session_cache_limiter('private');
      $cache_limiter = session_cache_limiter();
  
      session_cache_expire(120);
      $cache_expire = session_cache_expire();
  
  
      @session_start();
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $salt = md5($email . $senha);
      $custo = "06";
      $senhaHash = crypt($senha, "$2b$" . $custo . "$" . $salt . "$");
  
  
      $query = $database->prepare("select * from usuarios where (emailUsuario = :email) and senhaUsuario = :senha");
  
      
  
      $query->bindValue(":email", "$email");
      $query->bindValue(":senha", "$senhaHash");
      $query->execute();
  
      $result = $query->fetchAll(PDO::FETCH_ASSOC);
      // $result = $query->fetch_assoc();;
    //   var_dump($result);
      $total_result = @count($result);
      echo $total_result."teste";
  
      if ($total_result > 0) {
        
        $_SESSION['id_admin'] = $result[0]['idUsuario'];
        $_SESSION['nome_admin'] = $result[0]['nomeUsuario'];
        $_SESSION['email_admin'] = $result[0]['emailUsuario'];
        echo "<script>window.location='painel';</script>";
      } else {
        //echo "<script>window.alert('Dados incoretos');</script>";
        //echo "<script>window.location='1index.php';</script>";
       // header('Location:2index.php');
      }
    }

}


?>