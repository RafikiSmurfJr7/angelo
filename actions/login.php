<?php

require_once "../utils/db_utils.php"; /* Vai requirir od dados da pagina  */


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$verify_login = verify_login_credentials($name, $email, $password);
if (is_array($verify_login)) {
    if (array_key_exists('response', $verify_login) && $verify_login['response']) {
        $_SESSION["loggedin"] = true;

        header("Location: ../index.php");
        exit;
    } else if (array_key_exists('response', $verify_login) && array_key_exists('message', $verify_login)) {
        session_start();
        $_SESSION["error"] = $verify_login['message'];
        header("Location: ../index.php?p=login");
    }
} else {
    header("Location: ../index.php");
}



