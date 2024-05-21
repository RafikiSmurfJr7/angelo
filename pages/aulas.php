<?php

require_once "utils/db_utils.php";

/**
 * * Executa o método no ficheiro utils/db_utils para verificar se o utilizador atual está "logado" no sistema
 */
redirect_verify_login();
?>


    <?php include './includes/navbar.php'; ?>
    <section class="banner">
        <h1>Aulas<span>de Grupo</span></h1>
    </section>


    <!-- PARTE DAS AULAS DE GRUPO-->

    <div class="container3">
    
      <h1>Atividades Coletivas</h1>
      <p>Seja bem vindo as nossas aulas de grupo, aqui vai encontrar diversas formas de se exercitar!!</p>
    
    <main>
      <section class="group-class">
        <img src="imagens/aulas-ciclismo.jpeg" alt="Ciclismo">
        <div class="description">
          <h2>Ciclismo</h2>
          <p>Uma aula intensa e energética que simula uma corrida de bicicleta. Excelente para queimar calorias e fortalecer as pernas e o core.</p>
        </div>
      </section>
      
      <section class="group-class">
        <img src="imagens/aulas-zumba.jpeg" alt="Zumba">
        <div class="description">
          <h2>Zumba</h2>
          <p>Uma aula de dança fitness que combina movimentos de dança latina e internacional com ritmo e música energéticos. Divertida e eficaz para queimar calorias.</p>
        </div>
      </section>
      
      <section class="group-class">
        <img src="imagens/aulas-yoga.jpg" alt="Yoga">
        <div class="description">
          <h2>Yoga</h2>
          <p>Uma prática que combina posturas, respiração e meditação para promover relaxamento, flexibilidade e equilíbrio físico e mental.</p>
        </div>
      </section>
      <section class="group-class">
        <img src="imagens/aulas-hiit.jpg" alt="HIIT">
        <div class="description">
          <h2>HIIT</h2>
          <p>Treinos curtos e intensos que alternam entre períodos de alta intensidade e recuperação, projetados para queimar calorias e melhorar a resistência cardiovascular.</p>
        </div>
      </section>
      <section class="group-class">
        <img src="imagens/aulas-aerobica" alt="Aeróbica">
        <div class="description">
          <h2>Aeróbica</h2>
          <p>Coreografias divertidas e ritmadas que visam melhorar a saúde cardiovascular, queimar calorias e melhorar a coordenação.</p>
        </div>
      </section>
      <section class="group-class">
        <img src="imagens/aulas-boxe.jpg" alt="Boxe">
        <div class="description">
          <h2>Boxe</h2>
          <p>Uma prática que combina posturas, respiração e meditação para promover relaxamento, flexibilidade e equilíbrio físico e mental.</p>
        </div>
      </section>
    </main>
  </div>

  <!-- PARTE DA MUSCULAÇÃO DA  PAGINA-->
 
  <section class="program" id="program">
    <!--<div class="tit_musc">Musculação</div>-->
    <section class="conteudo5">
          <div class="main">
              <div class="text">
                  <h1>Qual a <span>importância</span><br>da musculação</h1> <!--  Titulo -->
              </div>

              <div class="img_comid">
                  <img src="imagens/musculacao.jpg">
              </div>
          </div>
          <p>A musculação é fundamental para fortalecer os músculos e melhorar a saúde de forma geral. 
            Este tipo de treino ajuda a aumentar a massa muscular, melhorando a postura e prevenindo lesões. 
            Além disso também acelera o metabolismo, facilitando o controlo do peso, e promove benefícios mentais, como a redução do stress e o aumento da autoconfiança. 
            Resumindo, a musculação é essencial para uma vida saudável e ativa, proporcionando vantagens físicas e mentais significativas.</p>
    </section>

    <div class="title">Exercicios</div>
    <div class="program-wrapper">
      <div class="program-card">
        <img class="program-img" src="imagens/aulas-supino" alt="">
        <div class="program-title">Supino (bench press)</div>
        <div class="program-detail">
          <p>Este exercicio consiste em empurrar uma barra ou halteres acima do peito enquanto estiver deitado num banco. 
            <br> Trabalha o peito, triceps e ombros.</p>
        </div>
      </div>

      <div class="program-card">
        <img class="program-img" src="imagens/aulas-flexao.jpg" alt="">
        <div class="program-title">Flexões</div>
        <div class="program-detail">
          <p>Este exercício é feito ao apoiar o peso do corpo com as mãos e os pés, baixando e levantando o corpo usando os braços.
                Trabalha o peito, tríceps, ombros e músculos do core.</p>
        </div>
      </div>

      <div class="program-card">
        <img class="program-img" src="imagens/aulas-agachamento.jpg" alt="">
        <div class="program-title">Agachamento</div>
        <div class="program-detail">
          <p>Este exercício consiste em flexionar os joelhos e os quadris para abaixar o corpo, mantendo a coluna ereta e o peso sobre os calcanhares.
                Trabalha os músculos das pernas, incluindo quadríceps e glúteos.</p>
        </div>
      </div>

      <div class="program-card">
        <img class="program-img" src="imagens/aulas-pull_up.jpg" alt="">
        <div class="program-title">Elevações</div>
        <div class="program-detail">
          <p>Este exercício consiste em levantar o corpo usando a força dos braços, puxando-se em direção a barra fixa.
                Trabalha os músculos das costas, bíceps e antebraços.</p>
        </div>
      </div>

      <div class="program-card">
        <img class="program-img" src="imagens/aulas-dead_lift.jpg" alt="">
        <div class="program-title">Levantamento terra </div>
        <div class="program-detail">
          <p>Este exercício envolve levantar uma barra ou halteres do chão até a altura dos quadris, usando os músculos das pernas, costas e glúteos.
            É um exercício composto que trabalha vários grupos musculares.</p>
        </div>
      </div>

      <div class="program-card">
        <img class="program-img" src="imagens/aulas-bicep.jpg" alt="">
        <div class="program-title">Rosca direta (Bicep)</div>
        <div class="program-detail">
          <p>Este exercício foca nos músculos do bíceps, envolvendo a flexão dos cotovelos para levantar pesos em direção aos ombros.
                É um exercício isolador para os braços.</p>
        </div>
      </div>

    </div>
  </section>
  
  <!-- Os outros exercícios -->
  <section class="nutricao">
  <div class="container4">
        <h2>Aconselhamentos Nutricionais</h2>
        <p>Se está em busca de orientações nutricionais relacionadas a perda de peso ou outros assuntos relacionados à nutrição, 
visite a nossa página ou contacte a nossa nutricionista especializada em nutrição para obter informações e concelhos personalizados.</p>
        <a href="?p=nutricao" class="botao">Página de Nutrição</a>
        <a href="?p=equipa" class="botao">Falar com nutricionista</a>
    </div>
  </section>

    
    <!-------------------------------------------------------------------------------->
  <?php include './includes/rodape.php'; ?>