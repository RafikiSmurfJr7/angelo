<?php

require_once __DIR__ . "/../config.php";

$conn = $conex;

/** 
 * * Verifica se o utilizador atual tem o login feito se não retorna falso 
 */
function verify_login()
{
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        return false;
    }
    return true;
}



/** 
 * * Se o utilizador atual não tiver o login feito redireciona para a página index
 */
function redirect_verify_login()
{
    if (!verify_login()) {
        header("Location: index.php?p=login");
    }
}


/** 
 * * Faz o logout
 */
function logout()
{
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit;
}

function verify_login_credentials($name, $email, $password)
{
    global $conn;

    $sql = "SELECT * FROM clientes WHERE name = ? AND email = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $email); /* os valores nome e email são passados para a basede dados */

    if ($stmt->execute()) {

        $result = $stmt->get_result();

        if ($result->num_rows >= 1) {
            $row = $result->fetch_assoc(); /* Vai mostrar e retornar o registro */

            if (password_verify($password, $row['password'])) { /* Se a pass estiver correta o cliente vai ser direcionado para o site */


                return ['response' => true];
            } else {
                return ['response' => false, 'message' => 'A password está incorreta !!'];
            }
        } else {
            return ['response' => false, 'message' => 'O utilizador não existe !!'];
        }
    } else {
        return false;
    }
}

/**
 * * Verfica se o nome de utilizador e o email já estão na base de dados
 */


function verify_username_email_exists($username, $email)
{

    global $conn;

    $sql = "SELECT * from clientes WHERE name = '$username' or email = '$email'";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        if ($stmt->get_result()->num_rows > 0) {
            return true;
        }
    } else {
        return true;
    }

    return false;

}


/** 
 * * CRIA CONTA DE UTILIZADOR 
 * */
function register($username, $email, $password)
{
    $_SESSION["nome_usuario"] = $username;

    global $conn;

    $username_and_email_exists = verify_username_email_exists($username, $email);

    if ($username_and_email_exists) {
        $_SESSION["error"] = 'O nome de utilizador ou email já estão a ser utilizados';
        return false;
    }


    // Hash da senha para segurança
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepara a instrução SQL para inserção de dados
    $sql = "INSERT INTO clientes (name, email, password) VALUES (?, ?, ?)";

    // Prepara a instrução SQL
    $stmt = $conn->prepare($sql);

    // Vincula parâmetros à instrução SQL preparada
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    // Executa a instrução SQL
    if ($stmt->execute()) {
        return true;
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;

        return false;
    }
}


