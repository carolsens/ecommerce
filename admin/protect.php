<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    header("location: login.php");
    die();
    //die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>