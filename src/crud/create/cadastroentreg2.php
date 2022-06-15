<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'/database/connection.php');

class DataBase extends DataBaseService{
    //validação de cpf
    private function cpf($cpf) {
        if ($cpf < 11) {
            echo("O CPF precisa possuir 11 dígitos");
            return false;
        }
    }

    public function adicionarEntregador($cpf, $nome, $celular, $email, $data_nasc, $endereco, $numero, $bairro, $cidade, $complemento) {

            // Preparando o comando SQL
            $sql = "INSERT INTO entregador (`cpf`, `nome`, `celular`, `email`, `data_nasc`, `endereco`, `numero`, `bairro`, `cidade`, `complemento`) ";
            $sql = $sql."VALUES (".$cpf.", '".$nome."', ".$celular.", '".$email."', '".$data_nasc."', '".$endereco."', ".$numero.", '".$bairro."', '".$cidade."', '".$complemento."' ) ";
        echo $sql;
            if(mysqli_query($this->conn, $sql)) {
                header("location: ../cadastroentreg.php?status=sucess");
            } else {
                echo("Falha ao realizar o cadastro" . $sql . mysqli_error($this->conn));
            }
    }
}

    if(!empty($_POST)) {
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $complemento = $_POST['complemento'];


        $realizarCadastro = new DataBase();
        $realizarCadastro -> adicionarEntregador($cpf, $nome, $celular, $email, $data_nasc, $endereco, $numero, $bairro, $cidade, $complemento);
    };
    
?>