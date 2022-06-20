<?php
if(!isset($_SESSION)) {
    session_start();
}
session_destroy();
header("Location: C:\xampp\htdocs\projeto-interdisciplinar-2\src\screens\index.php");
?>