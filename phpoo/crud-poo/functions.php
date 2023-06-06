<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crudPoo');

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

    public function insert($nome,$pai,$mae,$email,$telefone,$endereco,$dataEntrega){
        $ret=mysqli_query($this->dbh,"insert into cadastro (nome,pai,)values()");
    }
    return 
}
