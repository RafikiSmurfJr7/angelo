<?php

require_once "utils/db_utils.php";

/**
 * * Executa o método no ficheiro utils/db_utils para verificar se o utilizador atual está "logado" no sistema
 */
redirect_verify_login();

?>
    <?php include './includes/navbar.php'; ?>
    <section class="banner">
        <h1>Contacte-<span>nos</span></h1>
    </section>


    <!--Fim do menu-->
    <div class="container4">
        <div class="mapa">
            <div class="title1">
                <h1>A nossa <span>localização</span></h1>
            </div>
            <div class="mapbox">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3180.550458591871!2d-8.547297425086605!3d37.139608748495185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1b2892d0d5da31%3A0xe0dcb9d0290db79f!2sEscola%20Secund%C3%A1rial%20Manuel%20Teixeira%20Gomes!5e0!3m2!1spt-PT!2spt!4v1715164288507!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="info">
            <h1>Entre em contacto</h1>
            <h2>Estamos disponíveis por via telemóvel ou por email.</h2>
            <p>Contacte-nos:</p>
            <p><i class="fa fa-phone"></i> <span style="font-weight: normal;">Número: +351 123 456 789</span></p>
            <p><i class="fa fa-envelope"></i> <span style="font-weight: normal;">(FitLife2023@hotmail.com)</span></p>
            <p>Siga-nos nas Redes Sociais:</p>
            <ul class="redes-sociais">
                <li><a href="https://pt-pt.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>


    <?php include './includes/rodape.php'; ?>
