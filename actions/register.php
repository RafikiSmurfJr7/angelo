<?php

require_once '../utils/db_utils.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores enviados pelo formulário
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (register($name, $email, $password)) {
        header('Location: ../index.php?p=login');
    } else {
        header('Location: ../index.php?p=inscrever');
    }
}  