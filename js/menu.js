
window.addEventListener("scroll", function(){ //Criei uma funnção para quando o scroll acontecer
    var header = document.querySelector('#header') //Criação da variavel que vai receber o id header no site
    header.classList.toggle('rolar', window.scrollY > 0) //Quando scrol pass
})