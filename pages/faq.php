<?php

require_once "utils/db_utils.php";

/**
 * * Executa o método no ficheiro utils/db_utils para verificar se o utilizador atual está "logado" no sistema
 */
redirect_verify_login();

?>
<?php include './includes/navbar.php'; ?>
    <section class="banner">
        <h1>Perguntas<span> Frequentes</span></h1>
    </section>
    <section class="perguntas">
        <div class="wrapper">
            <h1>Tire as suas dúvidas:</h1>

            <div class="faq">
                <button class="accordion" type="button">Quais são os benefícios de se exercitar regularmente?<i class="fas fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>Exercitar-se regularmente traz uma série de benefícios para a saúde,
                        incluindo melhoria da condição cardiovascular, aumento da força muscular, 
                        controle de peso, redução do stresse, melhora do humor, aumento da energia e melhor qualidade de sono.</p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" type="button">Qual é a melhor forma de perder peso de maneira saudável?<i class="fas fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>A melhor forma de perder peso de maneira saudável envolve combinar uma dieta equilibrada com exercícios regulares.
                        Opte por alimentos nutritivos, controle as porções e mantenha-se 
                        ativo com uma combinação de cardio e treinamento de força.
                    </p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" type="button">Qual é a importância da nutrição na minha rotina de exercícios?<i class="fas fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>A nutrição adequada desempenha um papel fundamental no desempenho e na recuperação durante os exercícios. 
                        Consuma uma dieta equilibrada com proteínas, hidratos de carbono complexos,
                        gorduras saudáveis, vitaminas e minerais para sustentar o seu treino.
                    </p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" type="button">Com que frequência devo treinar para ver resultados?<i class="fas fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>Para ver resultados, é recomendado treinar de 3 a 5 vezes por semana
                        , combinando exercícios cardiovasculares e de resistência.
                        O descanso adequado entre os treinos também é essencial para a recuperação.
                    </p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" type="button">Como posso fazer a marcação para uma aula de grupo ou particular?<i class="fas fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>Para fazer a marcação de uma aula é bastante fácil, basta enviar-nos um <a href="?p=contactos">e-mail</a> para realizar o seu pedido,
                        ou pode enviar mensagem pessoal a um dos nossos <a href="?p=equipa">membros</a>!
                    </a>
                    </p>
                </div>
            </div>

            <div class="faq">
                <button class="accordion" type="button">Como posso aumentar minha energia para os treinos?<i class="fas fa-chevron-down"></i></button>
                <div class="pannel">
                    <p>Uma dieta equilibrada com carboidratos complexos e proteínas, além de uma boa hidratação, pode ajudar a aumentar a energia 
                        para os treinos. Também é importante descansar o suficiente e evitar excesso de stresse.
                    </p>
                </div>
            </div>

        </div>
        
        <div class="container2">
            <div class="contact-box">
                <div class="contact-content">
                    <h3>Se tiver alguma dúvida que não se encontra na página, entre em contato conosco.</h3>
                    <a href="?p=contactos" class="contact-button">Contate-nos</a>
                </div>
                <div class="contact-image">
                    <img src="imagens/duvidas.png" alt="Contato">
                </div>
            </div>  
        </div>
    </section>
    

    <?php include './includes/rodape.php'; ?>
    <!-- Script JavaScript -->
    <script src="js/perguntas.js"></script>
