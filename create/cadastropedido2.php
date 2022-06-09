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

    public function adicionarPedido($cnpj, $id_categoria, $valor, $data_pedido, $dimensao, $peso, $rua, $numero, $bairro, $cidade, $complemento) {

            // Preparando o comando SQL
            $sql = "INSERT INTO pedido (`cnpj`, `id_categoria`, `valor`, `data_pedido`, `dimensao`, `peso`, `rua`, `numero`, `bairro`, `cidade`, `complemento` ) ";
            $sql = $sql."VALUES (".$cnpj.", '".$id_categoria."', ".$valor.", '".$data_pedido."', '".$dimensao."', '".$peso."', '".$rua."', '".$numero."', '".$bairro."', '".$cidade."', '".$complemento."') ";
        echo $sql;
            if(mysqli_query($this->conn, $sql)) {
                header("location: ../.php?status=sucess");
            } else {
                echo("Falha ao realizar o cadastro" . $sql . mysqli_error($this->conn));
            }
    }
}

    if(!empty($_POST)) {
        $cnpj = $_POST['cnpj'];
        $id_categoria = $_POST['id_categoria'];
        $valor = $_POST['valor'];
        $data_pedido = $_POST['data_pedido'];
        $dimensao = $_POST['dimensao'];
        $peso = $_POST['peso'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $complemento = $_POST['complemento'];

        $realizarCadastro = new DataBaseService();
        $realizarCadastro -> adicionarPedido($cnpj, $id_categoria, $valor, $data_pedido, $dimensao, $peso, $cidade, $rua, $bairro, $numero, $complemento);
    };
    
?>