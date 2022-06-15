<?php

class DataBaseService {
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'bikelive';

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if(!$this->conn) 
        {
            die("Falha na conexão: " . mysqli_connect_error());
        }
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}
?>