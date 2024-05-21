<?php
require_once "utils/db_utils.php";

/**
 * * Executa o método no ficheiro utils/db_utils para verificar se o utilizador atual está "logado" no sistema
 */
redirect_verify_login();

?>


<?php include './includes/navbar.php'; ?>
<section class="banner">
  <h1>Conheça o <span>Mundo Fit</span></h1>
</section>

<!--Mneu--------->
<div class="conteudo-2"> <!-- DIV DOS SERVIÇOS -->
  <div class="tit">
    <h2>Os nossos serviços</h2>
  </div>
  <div class="quotes">
    <div class="card">
      <div class="box box1">
        <h2>Nutrição</h2>
        <p>A nutrição é crucial para a saúde, garantindo o equilíbrio na ingestão de alimentos para fornecer
          os nutrientes necessários. Uma dieta equilibrada promove o bem-estar físico e mental, sendo assim vai
          prevenir doenças e ajudar com o funcionamento do corpo.</p>
      </div>
      <div class="bg"></div>
    </div>
    <div class="card">
      <div class="box box2">
        <h2>Aulas de Grupo</h2>
        <p>
          Aulas de grupo oferecem motivação, socialização e variedade. Ambientes inspiradores,
          interações sociais e uma variedade de atividades físicas promovem o bem-estar e o
          compromisso com o exercício regular.</p>
      </div>
      <div class="bg"></div>
    </div>
    <div class="card">
      <div class="box box3">
        <h2>Musculação</h2>
        <p>A musculação fortalece os músculos, melhora a composição corporal e acelera o metabolismo.
          Ao aumentar a massa muscular, promove uma aparência mais definida e saudável, além de prevenir lesões.
        </p>
      </div>
      <div class="bg"></div>
    </div>
  </div>

</div>

<!--PARTE DAS AULAS-->
<div class="container3"> <!--DIV DAS AULAS-->
  <img src="imagens/aulas-site.jpg" alt="Aulas de Grupo" class="imagem">
  <div class="conteudo">
    <h1>Aulas de Grupo</h1>
    <p>Explora a diversão e vantagens das nossas aulas de grupo! A nossa equipa bem qualificada lidera uma variedade de
      sessões, desde yoga a treino de alta intensidade. Desfruta de um ambiente motivador e de treino funcional para alcançar os
      teus objetivos de forma eficaz e divertida!</p>
    <a href="?p=aulas" class="botao">Treinos</a> <!-- CAMINHO ERRADO-->
  </div>
</div>

<div class="prencher">

</div>

<!-- PARTE DA NUTRIÇÃO-->
<div class="container4">
  <div class="imagem-fundo">
    <!-- Sua imagem de fundo aqui -->
  </div>
  <div class="conteudo">
    <h1>Nutrição Saudável</h1>
    <ul>
      <li>Alimentação balanceada</li>
      <li>Superalimentos</li>
      <li>Receitas saudáveis</li>
      <li>Dietas Especificas</li>
    </ul>
    <a href="?p=nutricao" class="botao">Ver mais</a>
  </div>
</div>

<!-- PARTE DA EQUIPA-->
<div class="prencher">

</div>


<div class="slideshow-container">
  <h1>Equipa</h1>
  <div class="slide fade">
    <div class="slide-content">
      <div class="image-container">
        <img src="imagens/personal1.jpg" alt="Slide 1">
      </div>
      <div class="slide-info">
        <h2>Personal Trainer</h2>
        <p>Os nossos treinadores pessoais altamente qualificados proporcionam orientação personalizada para alcançar os
          seus objetivos de fitness. Com planos de treino adaptados, motivação e apoio contínuo,
          estamos empenhados em ajudá-lo a alcançar resultados duradouros e uma vida mais saudável..</p>
      </div>
    </div>
  </div>
  <div class="slide fade">
    <div class="slide-content">
      <div class="image-container">
        <img src="imagens/instrutor-aulas.jpg" alt="Slide 2">
      </div>
      <div class="slide-info">
        <h2>Instrutor de aulas Grupo</h2>
        <p>Os nossos instrutores de aulas de grupo apaixonados oferecem sessões energéticas e
          motivadoras para ajudá-lo a atingir os seus objetivos de fitness. Com aulas dinâmicas,
          variedade de modalidades e um ambiente acolhedor, estamos empenhados em tornar o seu treino divertido e eficaz
        </p>
      </div>
    </div>
  </div>
  <div class="slide fade">
    <div class="slide-content">
      <div class="image-container">
        <img src="imagens/N.jpeg" alt="Slide 3">
      </div>
      <div class="slide-info">
        <h2>Nutricionista</h2>
        <p>Os nossos nutricionistas experientes oferecem consultas personalizadas para ajudá-lo a alcançar uma
          alimentação saudável e equilibrada. Com orientação especializada, planos alimentares adaptados e
          suporte contínuo, estamos comprometidos em melhorar a sua saúde e bem-estar através da nutrição.</p>
      </div>
    </div>
  </div>
  <div class="slide fade">
    <div class="slide-content">
      <div class="image-container">
        <img src="imagens/fisio.jpg" alt="Slide 3">
      </div>
      <div class="slide-info">
        <h2>Fisioterapeuta</h2>
        <p>Os nossos fisioterapeutas qualificados proporcionam tratamentos personalizados para ajudá-lo
          a recuperar de lesões e melhorar a sua mobilidade. Com técnicas terapêuticas avançadas e orientação
          profissional, e
          stamos empenhados em restaurar o seu bem-estar físico e qualidade de vida.</p>
      </div>
    </div>
  </div>
</div>

 <!-- PARTE DOS EVENTOS-->
 <section class=" eventos">
  <h1>Eventos / Workshops</h1>
  <div class="slideshow-container">
      <div class="event-slide fade" style="background-image: url(imagens/aveia.jpg);">
          <div class="event-details">
              <h3>Workshop de Nutrição</h3>
              <p>Participe do nosso próximo workshop de nutrição e aprenda com especialistas como otimizar a sua alimentação para alcançar os seus objetivos.</p>
              <p><strong>Data:</strong> 25 de Junho</p>
          </div>
      </div>
      <div class="event-slide fade" style="background-image: url(imagens/yoga2.jpg);">
          <div class="event-details">
              <h3>Aula de Yoga ao Ar Livre</h3>
              <p>Venha relaxar e fortalecer o corpo e a mente com a nossa aula de yoga ao ar livre.</p>
              <p><strong>Data:</strong> 10 de Julho</p>
          </div>
      </div>

      <div class="event-slide fade" style="background-image: url(imagens/alongamento.jpg);">
          <div class="event-details">
              <h3>Workshop de Lesões e Prevenções</h3>
              <p>Faça parte da nossa sessão, onde iremos rever maneiras de reduzir o risco de lesões e ter uma recuperação eficaz.</p>
              <p><strong>Data:</strong> 15 de Julho</p>
          </div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
 </section>


<div class="precario">
  <h2>Planos Mensais</h2>
  <div class="price-row">
    <div class="price-col">
      <p>Básico</p>
      <h3>19.99€ <span>/ MÊS</span></h3>
      <ul>
        <li>Acesso: Até 3 vezes por semana</li>
        <li>Uso de todas as áreas comuns do ginásio</li>
        <li>Acesso a equipamento de musculação e cárdio</li>
      </ul>
    </div>

    <div class="price-col">
      <p>Avançado</p>
      <h3>29.99€ <span>/ MÊS</span></h3>
      <ul>
        <li>Acesso: Até 5 vezes por semana</li>
        <li>Uso de todas as áreas comuns do ginásio</li>
        <li>Acesso a equipamento de musculação e cárdio</li>
        <li>Sessão de orientação inicial com um personal trainer</li>
        <li>Aulas de Grupo(todas)</li>
      </ul>
    </div>

    <div class="price-col">
      <p class="premium">Premium</p>
      <h3>45.99€ <span>/ MÊS</span></h3>
      <ul>
        <li>Acesso: Ilimitado (Freepass)</li>
        <li>Uso de todas as áreas comuns do ginásio</li>
        <li>Acesso a equipamentos de musculação e cardio</li>
        <li>Aulas de grupo (todas)</li>
        <li>Acompanhamento nutricional personalizado</li>
        <li>Acesso a workshops e eventos especiais</li>
        <li>Sessões de avaliação fisica periódica</li>
      </ul>
    </div>
  </div>
</div>


<div class="partnerships-container">
    <h2>Parcerias</h2>
    <div class="partnerships">
        <div class="partner">
            <img src="imagens/alongamento.jpg" alt="Nutricionista">
            <h3>Equipamento</h3>
            <p>Consultoria nutricional personalizada para ajudar você a alcançar seus objetivos de fitness e saúde.</p>
        </div>
        <div class="partner">
            <img src="imagens/alongamento.jpg" alt="Fisioterapeuta">
            <h3>Nao sei</h3>
            <p>Serviços de fisioterapia especializados em reabilitação esportiva e prevenção de lesões.</p>
        </div>
        <div class="partner">
            <img src="imagens/alongamento.jpg" alt="Loja de Suplementos">
            <h3>Nao sei</h3>
            <p>Descontos exclusivos para membros do ginásio em uma ampla variedade de suplementos e produtos de nutrição.</p>
        </div>     
    </div>
</div>


<div class="testimonials-container">
    <h2>O que nossos membros dizem</h2>
    <div class="testimonials">
        <div class="testimonial">
            <p>"A equipa do ginásio é fantástica! Desde que comecei, me sinto mais saudável e confiante."</p>
            <h3>— João Pereira</h3>
        </div>
        <div class="testimonial">
            <p>"Os treinadores são muito atenciosos e os equipamentos são de alta qualidade. Adoro treinar aqui!"</p>
            <h3>— Maria Santos</h3>
        </div>
        <div class="testimonial">
            <p>"Participo nas aulas de grupo e sinto uma grande diferença na minha energia e bem-estar geral."</p>
            <h3>— Carlos Lima</h3>
        </div>
        <div class="testimonial">
            <p>"Os planos de nutrição e acompanhamento personalizado fizeram uma enorme diferença na minha vida."</p>
            <h3>— Ana Costa</h3>
        </div>
    </div>
</div>


<script src="js/eventos.js"></script>
<script src="js/slide.js"></script> <!-- CAMINHO PARA O EFEITO DE JAVASCRIPT-->

<?php include './includes/rodape.php'; ?> <!-- CAMINHO PARA INCLUIR O RODAPE-->