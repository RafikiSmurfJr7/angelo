<style>
    .rodape {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

footer {
    background-color: #111;
}

.footercontainer {
    width: 90%;
    padding: 60px 30px 20px;
}

.footersocials {
    display: flex;
    justify-content: center;
}

.footersocials a {
    /*ICONS */
    text-decoration: none;
    padding: 10px;
    /*t */
    background-color: white;
    /* Cor de fundo */
    margin: 10px;
    /*Espaçamento dos icons */
    border-radius: 20px;
}

.footersocials a i {
    font-size: 2em;
    /*Tamanho dos ICONS */
    color: black;
    /* Cor*/
    opacity: 0.9;
}

/* Nao esta a funcionar !!!! funcionou*/
.footersocials a:hover {
    /* Quando se passar com o cursor por cima do icon*/
    background-color: #111;
    /* Cor */
    transition: 0.5s;
    /*Tempo da transição da cor */
}

.footersocials a:hover i {
    /* quando o cursor passar o icon fica branco */
    color: white;
    transition: 0.5s;
}

.footernav {
    margin: 30px 0;
}

.footernav ul {
    display: flex;
    justify-content: center;
    list-style: none;
}

.footernav ul li a {
    color: white;
    margin: 20px;
    text-decoration: none;
    font-size: 1em;
    opacity: 0.7;
    transition: 0.5s;
}

.footernav ul li a:hover {
    opacity: 1;
    /* A cor muda */
}

.footerbottom {
    background-color: #000;
    padding: 20px;
    text-align: center;
}

.footerbottom {
    color: white;
}

.designer {
    opacity: 0.7;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 400;
    margin: 0px 5px;
}
@media (max-width: 700px) {
    .footernav ul {
        flex-direction: column;
    }

    .footernav ul li {
        width: 100%;
        text-align: center;
        margin: 10px;
    }
}
</style>
<footer>
        <div class="rodape">
            <div class="footercontainer">
                <div class="footersocials">
                    <a href="https://pt-pt.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://twitter.com/"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
                <div class="footernav">
                    <ul>
                        <li><a href="?p=site">Pagina inicial</a></li>
                        <li><a href="?p=aulas">serviços</a></li>
                        <li><a href="?p=equipa">Equipa</a></li>
                        <li><a href="?p=contactos">Contacte-nos</a></li>
                        <li><a href="?p=about">Sobre-nós</a></li>
                    </ul>
                </div>

            </div>
            <div class="footerbottom"> <!--Adicionei direitos-->
                <p>Website &copy;2024 Criado por <span class="designer">Ângelo</span></p> <!-- Class designer-->
            </div>
        </div>
    </footer>