<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'./bd/connection.php');

class DataBase extends DataBaseService{
    
    public function deletarEstabelecimento($cnpj) {
        
        // Preparando o comando SQL
        $sql = "DELETE FROM estabelecimento WHERE cnpj = ".$cnpj."";
        
        
        if(mysqli_query($this->conn, $sql)) {
            // Function definition
            function function_alert($message) {
            // Display the alert box 
            echo "<script>alert('$message');</script>";
        }
        
        // Function call
        header("location: ./deletarest.php?status=sucess");
        function_alert("Cadastro deletado com sucesso!");
        

        } else {
            echo("Falha ao deletar" . $sql . mysqli_error($this->conn));
        }    

    }
}

    if(!empty($_POST)) {
        $cnpj = $_POST['cnpj'];
        $deletarCadastro = new DataBase();
        $deletarCadastro -> deletarEstabelecimento($cnpj);
    };
    
?>