<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <style>
        html {
            height: 100vh;
        }

        body {
            text-align: center;
            /*deiixa tudo centrado*/
            /* font-family: Arial, Helvetica, sans-serif; */
            /*Tipo de letra*/
            background-color: rgb(113, 100, 100);
            /*Cor de fundo*/
            background-image: url(imagens/registo.jpg);
            /*Caminho para a imagem de fundo do login*/
            background-size: cover;
            /*Vai cobrir a pagina toda*/
            background-position: center, right:90px;
            ;

        }

        form {
            max-width: 300px;
            /*largura maxima*/
            margin: 0 auto;
            padding: 20px;
            /*espaçamento*/
            background-color: white;
            /*cor de fundo*/
            border-radius: 10px;
            /*deixar as bordas mais arredondadas*/
        }

        h1 {
            margin-top: 120px;
            /*Titulo do Formulario*/
        }

        input[type="text"],
        /* Campos do Formulario*/
        input[type="Email"],
        input[type="password"] {
            display: block;
            width: 100%;
            /*largura da caixa de texto*/
            margin-bottom: 10px;
            /*espaçameto*/
            padding: 5px;
            box-sizing: border-box;
            /*Maior*/
        }

        input[type="submit"] {
            /* Botão Entrar*/
            font-size: 15px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            /*Quando passamos com o rato por cima do botao vai */
            padding: 12px 20px;
            /*Vai deixar o botao maior*/
        }

        input[type="submit"]:hover {
            background-color: darkgreen;
            /*Quando o cursor passar em cima vai ficar com um verde mais escuro*/
        }

        a {
            background-color: green;
            font-size: 15px;
            float: right;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 10px;
            margin-right: 13px;
        }

        .alert-error {
            background-color: #F8D7DA;
            color: #672C42;
            padding-left: 8px;
            padding-right: 8px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 3px;
            border: 1px solid #F4C4C9;
            max-width: 20%;
            margin: auto;
            margin-bottom: 13px;
        }
    </style>
</head>

<?php session_start(); ?>


<body>
    <h1>Inscreve-te!</h1><br>
    <?php if (isset($_SESSION["error"])): ?>
        <p class="alert-error">
            <?php echo $_SESSION["error"];
            unset($_SESSION["error"]); ?>
        </p>
    <?php endif; ?>
    <form method="post" action="actions/register.php">

        Nome: <input type="text" name="name" required><br>

        E-mail: <input type="email" name="email" required><br>

        Senha: <input type="password" name="password" required><br>

        <input type="submit" value="inscrever">
        <a href="?p=login">Voltar para Login</a>
    </form>
    <br>
</body>

</html>