<?php

/** 
 * * Carrega a página a ser carregada pelo parametro p do método GET 
 * * se o parametro não estiver definido redireciona para a página site
 * */

$page = isset($_GET['p']) ? $_GET['p'] : "site";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<link rel=" stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 
        /*
        * Carrega os ficheiros css da mesma forma que carrega as páginas
        * Pelo nome do ficheiro que é igual ao nome que vem pelo parametro do GET
        */  
    -->
    <link rel="stylesheet" href="css/<?= $page ?>.css">
    <title>FitLifeGym</title>
</head>

<body>


    <?php
    /**
     * * Carrega a página a ser apresentada pelo nome do ficheiro na pasta pages
     */
    include ("./pages/$page.php");
    ?>

    <!-- 
        /*
        * Carrega os ficheiros js da mesma forma que carrega as páginas
        * Pelo nome do ficheiro que é igual ao nome que vem pelo parametro do GET
        */  
    -->
    <script src="js/<?= $page ?>.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>