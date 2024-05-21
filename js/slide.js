// Define uma variável para rastrear o índice do slide atual
let slideIndex = 0;

// Função para exibir os slides
function showSlides() {
  // Obtém todos os elementos com a classe "slide"
  let slides = document.getElementsByClassName("slide");

  // Oculta todos os slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Incrementa o índice do slide
  slideIndex++;

  // Se o índice for maior que o número de slides, define-o como 1 para reiniciar o ciclo
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  // Exibe o slide atual, subtraindo 1 do índice porque os arrays começam em 0
  slides[slideIndex - 1].style.display = "block";

  // Define um tempo para chamar a função novamente após 8 segundos
  setTimeout(showSlides, 6000); // Muda a imagem a cada 8 segundos
}

// Inicializa a função para iniciar o slideshow quando a página é carregada
showSlides();

