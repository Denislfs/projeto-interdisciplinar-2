<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['Userid'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"http://localhost/projeto-interdisciplinar-2/src/login/login.php\">Entrar</a></p>");
}

?>