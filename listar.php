<?php

// Parâmetros da conexão com o banco de dados
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bikelive1';


// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Preparando sql
$sql = "SELECT id, cpf, nome, celular, email, data_nasc, endereco, numero, bairro, cidade, complemento FROM entregador ";
$result = $conn->query($sql);

//Crianção da tabela que exibirá na tela caso não possuir dados irá trazer 0 results
if ($result->num_rows > 0) {
    echo "<table align='left' cellspacing=9 cellpadding=9><tr><th>ID</th><th>CPF</th><th>NOME</th><th>CELULAR</th><th>EMAIL</th><th>DATA DE NASCIMENTO</th><th>RUA</th>
    <th>NUMERO</th><th>BAIRRO</th><th>CIDADE</th><th>COMPLEMENTO</th><th>CHECK</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["cpf"]."</td><td>".$row["nome"]."</td><td>".$row["celular"]."</td><td>".$row["email"]."</td><td>".$row["data_nasc"]."</td>
        <td>".$row["endereco"]."</td><td>".$row["numero"]."</td><td>".$row["bairro"]."</td><td>".$row["cidade"]."<td>".$row["complemento"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>