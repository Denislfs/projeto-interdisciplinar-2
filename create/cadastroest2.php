<?php

class DataBaseService {
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'bikelive';

    //função para conexão
    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if(!$this->conn) {
            die("Falha na conexão: " . mysqli_connect_error());
        }
    }

    //função para destruir conexão
    public function __destruct()
    {
        mysqli_close($this->conn);
    }

    public function adicionarEstabelecimento($cnpj, $razao_social, $nome_fantasia, $telefone, $cep, $uf, $cidade, $bairro, $rua, $numero) {

            // Preparando o comando SQL
            $sql = "INSERT INTO estabelecimento (`cnpj`, `razao_social`, `nome_fantasia`, `telefone`, `cep`, `uf`, `cidade`, `bairro`, `rua`, `numero`) ";
            $sql = $sql."VALUES (".$cnpj.", '".$razao_social."', '".$nome_fantasia."', ".$telefone.", '".$cep."', '".$uf."', '".$cidade."', '".$bairro."', '".$rua."', ".$numero." ) ";
        echo $sql;
            if(mysqli_query($this->conn, $sql)) {
                header("location: ../cadastroest.php?status=sucess");
            } else {
                echo("Falha ao realizar o cadastro" . $sql . mysqli_error($this->conn));
            }
    }
}

    if(!empty($_POST)) {
        $cnpj = $_POST['cnpj'];
        $razao_social = $_POST['razao_social'];
        $nome_fantasia = $_POST['nome_fantasia'];
        $telefone = $_POST['telefone'];
        $cep = $_POST['cep'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];


        $realizarCadastro = new DataBaseService();
        $realizarCadastro -> adicionarEstabelecimento($cnpj, $razao_social, $nome_fantasia, $telefone, $cep, $uf, $cidade, $bairro, $rua, $numero);
    };
    
?>