<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'/database/connection.php');
class DataBase extends DataBaseService{

    public function deletarEntregador($id) {
        
        // Preparando o comando SQL
        $sql = "DELETE FROM entregador WHERE id = ".$id."";
        
        
        if(mysqli_query($this->conn, $sql)) {
            // Function definition
            function function_alert($message) {
            // Display the alert box 
            echo "<script>alert('$message');</script>";
        }
        
        // Function call
        header("location: ../deletarentregador.php?status=sucess");
        function_alert("Cadastro deletado com sucesso!");
        

        } else {
            echo("Falha ao deletar" . $sql . mysqli_error($this->conn));
        }    

    }
}

    if(!empty($_POST)) {
        $id = $_POST['id'];
        $deletarCadastro = new DataBase();
        $deletarCadastro -> deletarEntregador($id);
    };
    
?>