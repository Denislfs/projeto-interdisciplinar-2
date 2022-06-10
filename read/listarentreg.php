<?php

class DataBaseService{
    // Parâmetros da conexão com o banco de dados
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'bikelive';

    //função para conexão
    public function __construct()
    {
        // Criando a conexão
       $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Falha na conexão: " . mysqli_connect_error());
        }
    }

    //função para destruir conexão
    public function __destruct()
    {
        mysqli_close($this->conn);
    }

    public function selecionarEntregador()
    {
        //Preparando sql
        $sql = "SELECT * FROM entregador ";
        $result = $this->conn->query($sql);

        //Crianção da tabela que exibirá na tela caso não possuir dados irá trazer 0 results
        if ($result->num_rows > 0) {
            echo "<table align='left' cellspacing=9 cellpadding=9><tr><th>ID</th><th>CPF</th><th>NOME</th><th>CELULAR</th><th>EMAIL</th><th>DATA DE NASCIMENTO</th><th>RUA</th>
            <th>NUMERO</th><th>BAIRRO</th><th>CIDADE</th><th>COMPLEMENTO</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["cpf"]."</td><td>".$row["nome"]."</td><td>".$row["celular"]."</td><td>".$row["email"]."</td><td>".$row["data_nasc"]."</td>
                <td>".$row["endereco"]."</td><td>".$row["numero"]."</td><td>".$row["bairro"]."</td><td>".$row["cidade"]."<td>".$row["complemento"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }

}
$realizarListagem = new DataBaseService();
$realizarListagem -> selecionarEntregador();
?>