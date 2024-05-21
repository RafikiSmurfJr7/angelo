<?php

require_once "utils/db_utils.php";

/**
 * * Executa o método no ficheiro utils/db_utils para verificar se o utilizador atual está "logado" no sistema
 */
redirect_verify_login();

?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="menu.js"></script>
   

<body>
    <?php include './includes/navbar.php'; ?>
    <section class="banner">
        <h1>FitLife<span>Gym</span></h1>
    </section>

    
    <!--FIM DO MENU-->
    <!-- --------------------------------------------------------------------------------------------- -->
    <!--Começo do conteudo da página-->
    <div class="wrapper1">
        <h1>Objetivos</h1>

        <div class="team">
            <div class="team_member">
                <div class="team_img">
                    <img src="imagens/objetivo.png" alt="">
                </div>
                <h3>Saude & Bem estar</h3>
                <p>Um dos nossos principais objetivos é promover a saúde e o bem-estar dos nossos clientes, 
                    proporcionando assim um ambiente que encoraja e facilita o desenvolvimento físico e mental de cada pessoa. </p>
            </div>
            <div class="team_member">
                <div class="team_img">
                    <img src="imagens/objetivo.png" alt="">
                </div>
                <h3>Metas</h3>
                <p>Queremos ajudar os nossos clientes a definir metas realistas e alcançáveis para o seu treinamento. 
                    Seguindo um plano adaptado às necessidades individuais, queremos garantir que cada cliente se possa 
                    desenvolver de forma sustentável e saudável.</p>
            </div>
            <div class="team_member">
                <div class="team_img">
                    <img src="imagens/objetivo.png" alt="">
                </div>
                <h3>Conquistas</h3>
                <p>Uma grande conquista seria ajudar os clientes a adotar estilos de vida saudáveis ​e 
                    ativos, fornecendo apoio, nutricional e programas de exercício eficazes. 
                    Isto melhoraria significativamente a saúde, o bem-estar e a qualidade de vida de cada um dos nossos membros.</p>
            </div>
        </div>
    </div>
    


    <!--OUTRA-->
    <div class="sobre_nos">
        <div class="wrapper">
            <div class="conteudo">
                <h3>Conheça-nos melhor</h3>
                <p>A nossa equipa está preparada para tudo e bastante motivada pelo bem do fitness,
                    preocupamo-nos com o seu bem-estar e progresso. <br>
                    O noss WebSite "FitLifeGym" foi fundado no ano 2023,
                    com o intuito de proporcionar, um ambiente acolhedor, e motivador para todos os tipos de idade. <br>
                    Se estás a começar agora a tua jornada no mundo do fitness, ou és um atleta com experiencia mas que
                    procura evoluir e está em busca de novoa desafios, o nosso ginásio é o lugar ideal para ti. <br>
                    Junta-te a nós para alcançar uma vida mais saudável e ativa.</p>

            </div>
            <div class="imagem">
                <img src="imagens/logotipo3.png">
            </div>
        </div>
    </div>
    <!--Colocar o roda pé-->
    <div class="prencher"></div>
    
    <?php include './includes/rodape.php'; ?>

</body>

