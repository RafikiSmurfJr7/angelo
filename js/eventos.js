// Inicializa o índice do slide como 0 (primeiro slide)
let slideIndex2 = 0;

// Chama a função para mostrar o slide inicial
showSlides2(slideIndex2);

/**
 * Função para avançar ou retroceder slides.
 * @param {number} n - Número de slides a avançar (positivo) ou retroceder (negativo).
 */
function plusSlides(n) {
    // Ajusta o índice do slide atual e chama a função para mostrar o slide correspondente
    showSlides2(slideIndex2 += n);
}

/**
 * Função para mostrar o slide de acordo com o índice atual.
 * @param {number} n - Índice do slide a ser mostrado.
 */
function showSlides2(n) {
    // Obtém todos os elementos com a classe "event-slide"
    let slides2 = document.getElementsByClassName("event-slide");
    
    // Se o índice for maior ou igual ao número de slides, volta ao primeiro slide
    if (n >= slides2.length) {slideIndex2 = 0}
    
    // Se o índice for menor que 0, vai para o último slide
    if (n < 0) {slideIndex2 = slides2.length - 1}
    
    // Esconde todos os slides
    for (let i = 0; i < slides2.length; i++) {
        slides2[i].style.display = "none";
    }
    
    // Mostra o slide atual
    slides2[slideIndex2].style.display = "block";
}

// Configura um intervalo para avançar automaticamente o slide a cada 5 segundos (5000 milissegundos)
setInterval(() => {
    plusSlides(1);
}, 6000);