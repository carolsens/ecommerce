<?php

$usuario = 'root';
$senha = '';
$database = 'lojavirtualdb';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

$mysqli->set_charset("utf8");

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}