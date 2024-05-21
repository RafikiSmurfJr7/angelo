<?php

require_once "utils/db_utils.php";

/**
 * * Executa o método no ficheiro utils/db_utils para verificar se o utilizador atual está "logado" no sistema
 */
redirect_verify_login();

?>



            
    <?php include './includes/navbar.php'; ?>
    <section class="banner">
        <h1>Area<span> de Nutrição</span></h1>
    </section>

   
    <!-------------------------------------------------------------------------------->
    <section class="conteudo">
        <div class="main">
            <div class="text">
                <h1>Alimenta te <span>de</span><br>melhor forma</h1> <!--  Titulo -->
            </div>

            <div class="img_comid">
                <img src="imagens/Comidas.jpg">
            </div>
        </div>
        <p>No FitLifeGym, a nutrição é fundamental para alcançar os teus objetivos. Alimenta-te de melhor forma para mais resultados 
            no teu treino e bem-estar. Os nossos especialistas em nutrição criaram algumas opções que te vão ajudar no dia a dia e que podes 
            desfrutar pois são refeições saudáveis e equilibradas.
            Descobre como comer bem pode melhorar o teu desempenho e bem estar. Investe na tua saúde e experimenta os nossos pratos pensados para ti.</p>
    </section>

    <!-- OUTRA SECÇÃO-->
    <section class="diet" id="diet">
        <h1 class="heading">Plano de Dieta</h1>

        <ul class="controls">
            <li class="buttons active" data-filter="all">
                <img src="imagens/icone4.png" alt="">
                <h3>Todos</h3>
            </li>
            <li class="buttons" data-filter="breakfast"> <!--POR METER-->
                <img src="imagens/icone1.png" alt="">
                <h3>Pequeno-almoço</h3>
            </li>
            <li class="buttons" data-filter="lunch">
                <img src="imagens/icone2.png" alt="">
                <h3>Almoço</h3>
            </li>
            <li class="buttons" data-filter="dinner">
                <img src="imagens/icone3.png" alt="">
                <h3>Jantar</h3>
            </li>
        </ul>

        <!--Começo das comidas-->

        <div class="image-container">
            <div class="box lunch"> <!-- CAIXA-->
                <div class="diet-image">
                    <img src="imagens/salmao.jpg" alt=""> <!-- CAMINHO DA IMAGEM-->
                </div>
                <div class="diet-content">
                    <h4>Salmão grelhado com legumes</h4><!-- TITULO DA REFEILÇÃO-->
                    <p><span>Descrição: </span>Salmão grelhado com legumes (a sua preferência).</p>  <!-- DESCRIÇÃO-->
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i>11 junho, 2024</a><br>
                        <a href="?p=equipa"><i class="fas fa-user"></i>Nutricionista</a>
                    </div>
                </div>
            </div>
            
            <div class="box lunch">
                <div class="diet-image">
                    <img src="imagens/salada.jpg" alt="">
                </div>
                <div class="diet-content">
                    <h4>Salada de Quinoa com Frango e Abacate</h4>
                    <p><span>Descrição: </span>Quinoa, frango grelhado, abacate, tomate e folhas verdes.</p>
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i>11 junho, 2024</a><br>
                        <a href="?p=equipa"><i class="fas fa-user"></i>Nutricionista</a>
                    </div>
                </div>
            </div>

            <div class="box breakfast">
                <div class="diet-image">
                    <img src="imagens/panquecas.jpg" alt="">
                </div>
                <div class="diet-content">
                    <h4>Panquecas de banana</h4>
                    <p><span>Descrição: </span>Panquecas feitas com banana e aveia, sem açúcar adicionado.</p>
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i>11 junho, 2024</a><br>
                        <a href="?p=equipa"><i class="fas fa-user"></i>Nutricionista</a>
                    </div>
                </div>
            </div>

            <div class="box breakfast">
                <div class="diet-image">
                    <img src="imagens/aveia" alt="">
                </div>
                <div class="diet-content">
                    <h4>Aveia com frutas frescas</h4>
                    <p><span>Descrição: </span>Aveia, maçã picada, e nozes com iogurte.</p>
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i>11 junho, 2024</a><br>
                        <a href="?p=equipa"><i class="fas fa-user"></i>Nutricionista</a>
                    </div>
                </div>
            </div>
            <div class="box dinner">
                <div class="diet-image">
                    <img src="imagens/tofu.jpg" alt="">
                </div>
                <div class="diet-content">
                    <h4>Tofu</h4>
                    <p><span>Descrição: </span>Tofu marinado, vegetais(como brócoles, pimentos e cenoura) assados e arroz integral.</p>
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i>11 junho, 2024</a><br>
                        <a href="?p=equipa"><i class="fas fa-user"></i>Nutricionista</a>
                    </div>
                </div>
            </div>
            <div class="box lunch">
                <div class="diet-image">
                    <img src="imagens/esparguete.jpg" alt="">
                </div>
                <div class="diet-content">
                    <h4>esparguete bolonhesa de perú</h4>
                    <p><span>Descrição: </span>Esparguete, carne de peru, vegetais aromáticos, tomate e ervas frescas.</p>
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i>11 junho, 2024</a><br>
                        <a href="?p=equipa"><i class="fas fa-user"></i>Nutricionista</a>
                    </div>
                </div>
            </div>

            <div class="box breakfast">
                <div class="diet-image">
                    <img src="imagens/torradas.jpg" alt="">
                </div>
                <div class="diet-content">
                    <h4>Torrada de abacate com ovo</h4>
                    <p><span>Descrição: </span>Fatia de pão integral com puré de abacate e ovo por cima.</p>
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i>11 junho, 2024</a><br>
                        <a href="?p=equipa"><i class="fas fa-user"></i>Nutricionista</a>
                    </div>
                </div>
            </div>

            <div class="box dinner">
                <div class="diet-image">
                    <img src="imagens/bife.jpg" alt="">
                </div>
                <div class="diet-content">
                    <h4>Bife Grelhado</h4>
                    <p><span>Descrição: </span>Bife grelhado com molho de chimichurri, acompanhado de uma simples salada.</p>
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i>11 junho, 2024</a><br>
                        <a href="?p=equipa"><i class="fas fa-user"></i>Nutricionista</a>
                    </div>
                </div>
            </div>

            <div class="box dinner">
                <div class="diet-image">
                    <img src="imagens/peixe.jpg" alt="">
                </div>
                <div class="diet-content">
                    <h4>Peixe Assado com Molho de Limão e Ervas</h4>
                    <p><span>Descrição: </span>Filé de peixe assado com molho de limão e ervas frescas, acompanhado de espargos ou brócolis.</p>
                    <div class="icon">
                        <a href="#"><i class="fas fa-clock"></i>11 junho, 2024</a><br>
                        <a href="?p=equipa"><i class="fas fa-user"></i>Nutricionista</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <div class="box3">
        <div class="summary">
            <h2>Aconselha<span>mentos</span></h2>
            <p>Aqui estão alguns conselhos sobre saúde, perda de peso e nutrição:</p><br>
            <p><strong>Saúde:</strong> Manter uma boa saúde requerer uma alimentação equilibrada, a prática regular de exercicios físicos, sono adequado e bons hábitos</p><br>
            <p><strong>Perda de peso:</strong> Para perder peso de forma saudável, é essencial adotar uma dieta equilibrada e praticar atividades físicas regularmente.</p><br>
            <p><strong>Nutrição:</strong> Para manter uma boa saúde nutricional, é essencial adotar uma alimentação equilibrada, rica em nutrientes essenciais, combinada com exercícios físicos regulares e hábitos de autocuidado consistentes.</p>
        </div>
        <ul class="topics">
            <li>
                <div class="topic-icon">S</div>
                <span>Saúde</span>
            </li>
            <li>
                <div class="topic-icon">P</div>
                <span>Perda de peso</span>
            </li>
            <li>
                <div class="topic-icon">N</div>
                <span>Nutrição</span>
            </li>
        </ul>
    </div>
    
    <script src="js/diet.js"></script>
    <!--Colocar  o roda pé-->
    <?php include './includes/rodape.php'; ?>