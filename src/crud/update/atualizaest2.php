<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'/database/connection.php');

class DataBase extends DataBaseService{

    public function mostrarDados()
	{
		$query = "SELECT * FROM estabelecimento";
		 $result = $this->conn->query($query);
		if ($result->num_rows > 0) 
        {
		    $data = array();
		    while ($row = $result->fetch_assoc()) 
            {
		           $data[] = $row;
		    }
			 return $data;
		}else{
			echo "No found records";
		}
	}

    public function exibirCnpj($cnpj)
	{
		$query = "SELECT * FROM estabelecimento WHERE cnpj = '$cnpj'";
		$result = $this->conn->query($query);
		if ($result->num_rows > 0) 
        {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			echo "Record not found";
		}
	}


    public function atualizarEstabelecimento($postData)
	{
		$razao_social = $this->conn->real_escape_string($_POST['razao_social']);
		$nome_fantasia = $this->conn->real_escape_string($_POST['nome_fantasia']);
		$telefone = $this->conn->real_escape_string($_POST['telefone']);
		$cep = $this->conn->real_escape_string($_POST['cep']);
		$uf = $this->conn->real_escape_string($_POST['uf']);
		$cidade = $this->conn->real_escape_string($_POST['cidade']);
		$bairro = $this->conn->real_escape_string($_POST['bairro']);
		$rua = $this->conn->real_escape_string($_POST['rua']);
		$numero = $this->conn->real_escape_string($_POST['numero']);
		$cnpj = $this->conn->real_escape_string($_POST['cnpj']);
		if (!empty($cnpj) && !empty($postData)) 
        {
			$query = "UPDATE estabelecimento SET razao_social = '$razao_social', nome_fantasia = '$nome_fantasia', telefone = '$telefone', cep = '$cep', uf = '$uf'
            , cidade = '$cidade', bairro = '$bairro', rua = '$rua', numero = '$numero' WHERE cnpj = '$cnpj'";
			$sql = $this->conn->query($query);
			if ($sql==true) 
            {
                header("location: http://localhost/projeto-interdisciplinar-2/src/screens/atualizaest.php");
			}else{
			    echo "Registration updated failed try again!";
			}
		}
			
	}
}
?>