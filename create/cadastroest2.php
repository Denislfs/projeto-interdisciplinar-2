<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'./bd/connection.php');

class DataBase extends DataBaseService{

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


        $realizarCadastro = new DataBase();
        $realizarCadastro -> adicionarEstabelecimento($cnpj, $razao_social, $nome_fantasia, $telefone, $cep, $uf, $cidade, $bairro, $rua, $numero);
    };
    
?>