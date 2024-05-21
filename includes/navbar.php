<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

.container{
    max-width: 1280px;
    margin: auto;
}

.flex{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.header{
    width: 100%; /*Deixar o menu comleto*/
    padding: 50px 3%; /*Espaçamento em cima e 3% dos lados no caso de telas maiores*/
    position: fixed; /*Vai deixar o menu fixo*/
    top: 0;
    left: 0;
    transition: .5s;
    z-index: 1000; /* Vai deixar o conteudo da página por debaixo do menu */
}

.header.rolar{ /*Estilo da função de scroll*/
    background-color: rgb(0, 0, 0)	; /*Cor do menu*/
    padding: 20px 3%; /*Espaçamento em cima e 3% dos lados no caso de telas maiores*/

}

.header img{ /*IMAGEM logo*/
    height: 80px; /*Altura da imagem */
}

.header ul{
    list-style: none; /*Para ficar sem as bolinhas */
}

.header ul li{
    display: inline-block; /*Vai deixar o menu alinhado*/
    margin: 0 40px; /*Espaço entre cada um dos campos*/
}

.header ul li a{
    color: white; /*Cor de texto dos campos*/
    text-decoration: none; /*Para não ficar sublinhado*/
    
}
/*A tentar fazer o menu dropdown em serviços com os campos nutrição e aulas em grupo*/


/* Estilização do menu principal */
nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    display: inline-block;
    position: relative;
}

nav ul li a {
    text-decoration: none;
    padding: 10px 15px;
    display: block;
    color: #ffffff;
}

/* Estilização do menu dropdown */
nav ul ul {
    display: none;
    position: absolute;
    top: 100%;
    
    background-color: rgb(0, 0, 0);
}

nav ul li:hover > ul {
    display: inherit;
}
nav ul ul li:hover{ /* COR DOS SERVIÇOS COM HOVER*/
    background-color: #323131;
}


nav ul ul li {
    width: 100%; /* Ocupa a largura total do contêiner pai */
    float: none;
    display: list-item;
    position: relative;
    left: -40px;
}

/*------------------------------------------------------*/

.nome{
    color: white;
}

.sair input{
    width: 120px; /*Largura*/
    height: 40px;/*altura*/
    border: 4 white;
    background-color: #4d4d4d;
    color: white;
    display: inline-block;
    cursor: pointer;
    transition: .2s;
}

.sair input:hover{
    background-color: #262626 ;
}

@media (max-width: 700px) {
    .header ul {
        flex-direction: column;
    }

    .header ul li {
        width: 100%;
        text-align: center;
        margin: 10px;
    }
}
</style>
<header class="header" id="header"> <!-- id para chamar na pagina de java-->
    <div class="container">
        <div class="flex">
            <a href="?p=site"><img src="imagens/logotipo3.png" alt=""></a>
            <nav>
                <ul> <!--Menu--->
                    <li><a href="#">Serviços</a>
                        <ul>
                            <li><a href="?p=aulas">Aulas</a></li>
                            <li><a href="?p=nutricao">Nutrição</a></li>
                        </ul>
                    </li>
                    <li><a href="?p=equipa">Equipa</a></li>
                    <li><a href="?p=faq">FAQ</a></li>
                    <li><a href="?p=contactos">Contactos</a></li>
                    <li><a href="?p=about">Sobre nós</a></li>

                    
                </ul>
            </nav>
            <div class="sair">
                <form method="post" action="actions/logout.php">
                    <input class="logout" type="submit" name="logout" value="Sair">
            </div>
        </div><!--Flex-->
    </div><!--Container-->
</header>