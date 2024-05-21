function filterItems(filter) {
    const boxes = document.querySelectorAll('.box'); // Seleciona todos os elementos com a classe 'box'

    boxes.forEach(box => {
        if (filter === 'all' || box.classList.contains(filter)) {
            box.style.display = 'block'; // Mostra o elemento se corresponder ao filtro ou se o filtro for 'all'
        } else {
            box.style.display = 'none'; // Oculta o elemento se não corresponder ao filtro selecionado
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.buttons'); // Seleciona todos os elementos com a classe 'buttons'

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter'); // Obtém o valor do atributo 'data-filter'

            // Remove a classe 'active' de todos os botões e a adiciona apenas ao botão clicado
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            filterItems(filter); // Chama a função para filtrar os elementos com base no filtro selecionado
        });
    });
});