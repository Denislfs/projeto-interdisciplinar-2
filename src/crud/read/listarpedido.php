<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'./database/connection.php');

class DataBase extends DataBaseService{

    public function selecionarPedido()
    {
        //Preparando sql
        $sql = "SELECT * FROM pedido ";
        $result = $this->conn->query($sql);

        //Crianção da tabela que exibirá na tela caso não possuir dados irá trazer 0 results
        if ($result->num_rows > 0) {
            echo "<table align='left' cellspacing=9 cellpadding=9><tr><th>ID</th><th>CNPJ</th><th>CATEGORIA</th><th>VALOR</th><th>DISPONÍVEL</th><th>DATA E HORÁRIO DO PEDIDO</th><th>DIMENSÃO</th>
            <th>RUA</th><th>PESO</th><th>NÚMERO</th><th>BAIRRO</th><th>CIDADE</th><th>COMPLEMENTO</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["cnpj"]."</td><td>".$row["id_categoria"]."</td><td>".$row["valor"]."</td><td>".$row["disponivel"]."</td><td>".$row["data_pedido"]."</td>
                <td>".$row["dimensao"]."</td><td>".$row["rua"]."</td><td>".$row["peso"]."</td><td>".$row["numero"]."</td><td>".$row["bairro"]."</td><td>".$row["cidade"]."</td><td>".$row["complemento"]."</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }

}
$realizarListagem = new DataBase();
$realizarListagem -> selecionarPedido();
?>