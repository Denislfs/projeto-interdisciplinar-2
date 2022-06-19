<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'/database/connection.php');

class DataBase extends DataBaseService{

    public function mostrarDados()
	{
		$query = "SELECT * FROM entregador";
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

    public function exibirID($id)
	{
		$query = "SELECT * FROM entregador WHERE id = '$id'";
		$result = $this->conn->query($query);
		if ($result->num_rows > 0) 
        {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			echo "Record not found";
		}
	}


    public function atualizarEntregador($postData)
	{
		$cpf = $this->conn->real_escape_string($_POST['cpf']);
		$nome = $this->conn->real_escape_string($_POST['nome']);
		$celular = $this->conn->real_escape_string($_POST['celular']);
		$email = $this->conn->real_escape_string($_POST['email']);
		$data_nasc = $this->conn->real_escape_string($_POST['data_nasc']);
		$endereco = $this->conn->real_escape_string($_POST['endereco']);
		$numero = $this->conn->real_escape_string($_POST['numero']);
		$bairro = $this->conn->real_escape_string($_POST['bairro']);
		$cidade = $this->conn->real_escape_string($_POST['cidade']);
		$complemento = $this->conn->real_escape_string($_POST['complemento']);
		$id = $this->conn->real_escape_string($_POST['id']);
		if (!empty($id) && !empty($postData)) 
        {
			$query = "UPDATE entregador SET cpf = '$cpf', nome = '$nome', celular = '$celular', email = '$email', data_nasc = '$data_nasc'
            , endereco = '$endereco', numero = '$numero', bairro = '$bairro', cidade = '$cidade', complemento = '$complemento' WHERE id = '$id'";
			$sql = $this->conn->query($query);
			if ($sql==true) 
            {
				header("location: http://localhost/projeto-interdisciplinar-2/src/screens/atualizarentreg.php");
			}else{
			    echo "Registration updated failed try again!";
			}
		}
			
	}
}
?>