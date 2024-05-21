<?php
session_start();

$basedir = __DIR__;

/*A fazer a conexão há base de dados */
$servername = "localhost";
$dbusername = "rafa"; /*Nome de utilizador da base de dados */
$password = "password";
$dbname = "login";


$conex = new mysqli($servername, $dbusername, $password, $dbname);

// Verifica a conexão
if ($conex->connect_error) {
    die("Falha na conexão: " . $conex->connect_error);
}
