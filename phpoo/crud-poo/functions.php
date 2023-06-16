<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crudpoo');

class DB_con
{
    function __construct()
    {
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

        $this->dbh = $con;

        // check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_errno();
        }
    }

    // Data insertion Functions

    public function insert($nome, $pai, $mae, $email, $telefone, $endereco, $dataEntrega)
    {
        $ret = mysqli_query($this->dbh, "insert into cadastro (nome,pai,mae,email,telefone,endereco,dataEntrega)values('$nome','$pai','$mae','$email','$telefone','$endereco','$dataEntrega')");
        return $ret;
    }

    // Data read function

    public function fetchdata()
    {
        $result = mysqli_query($this->dbh, "select * from cadastro")
            or die(mysqli_error($this->dbh));
        return $result;
    }
    // Data one record read function
    // Funcao de leitura de um registro de dados

    public function fetchonerecord($id)
    {
        $oneresult = mysqli_query($this->dbh, "select * from cadastro where id = $id");
        return $oneresult;
    }


    // Data updation function

    public function update($nome, $pai, $mae, $email, $telefone, $endereco, $dataEntrega, $userid)
    {
        $updaterecord = mysqli_query($this->dbh, "update cadastro set 
        nome = '$nome',
        pai = '$pai', 
        mae = '$mae', 
        email = '$email', 
        telefone = '$telefone', 
        endereco = '$endereco', 
        dataEntrega = '$dataEntrega'
        where id = $userid");
    }


    // Data deletion function Function

    public function delete($id)
    {
        $deleterecord = mysqli_query($this->dbh, "delete from cadastro where id = $id");
        return $deleterecord;
    }
}
