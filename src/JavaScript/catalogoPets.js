// Objeto para armazenar os filtros ativos
let filtrosAtivos = {
    raca: '',
    porte: '',
    idade: '',
    sexo: '',
};

// Função para renderizar os cards com base nos filtros ativos
function aplicarFiltros() {
    const catalogo = document.getElementById('catalogo-pets');
    catalogo.innerHTML = ''; // Limpa o catálogo

    const petsFiltrados = petsLista.filter(pet => {
        const racaFiltro = !filtrosAtivos.raca || pet.raca === filtrosAtivos.raca;
        const porteFiltro = !filtrosAtivos.porte || pet.porte === filtrosAtivos.porte;
        const idadeFiltro = !filtrosAtivos.idade || pet.idade === filtrosAtivos.idade;
        const sexoFiltro = !filtrosAtivos.sexo || pet.sexo === filtrosAtivos.sexo;        

        return racaFiltro && porteFiltro && idadeFiltro && sexoFiltro;
    });

    petsFiltrados.forEach(pet => {
        const petCard = document.createElement('div');
        petCard.classList.add('pet-card');

        petCard.innerHTML = `           
                <div class="img-box">
                    <img src="${pet.img}" alt="${pet.nome}">
                </div>

                <div class="pet-about">
                    <h3>${pet.nome}</h3>

                    <p>${pet.sexo}</p>

                    <p>${
                        pet.castrado
                            ? (pet.sexo.toLowerCase() === 'macho' ? 'Castrado' : 'Castrada')
                            : (pet.sexo.toLowerCase() === 'macho' ? '' : '')
                    }</p>

                    <p>${
                        pet.vacinado
                            ? (pet.sexo.toLowerCase() === 'macho' ? 'Vacinado' : 'Vacinada')
                            : (pet.sexo.toLowerCase() === 'macho' ? '' : '')
                    }</p>
                </div>
        `;
        catalogo.appendChild(petCard);
    });
}

// Função para configurar filtros e atualizar a renderização dos cards
function configurarFiltros() {
    const botoesFiltro = document.querySelectorAll('.btn-filtro');

    botoesFiltro.forEach(botao => {
        botao.addEventListener('click', () => {
            const tipo = botao.dataset.raca || botao.dataset.porte || botao.dataset.idade || botao.dataset.sexo;

            const categoria = botao.dataset.raca ? 'raca' : botao.dataset.porte ? 'porte' : botao.dataset.idade  ? 'idade' : 'sexo';

            // Alterna o estado do botão e atualiza o filtro
            botao.classList.toggle('filtro-ativo');
            filtrosAtivos[categoria] = botao.classList.contains('filtro-ativo') ? tipo : '';

            // Aplica os filtros e renderiza os cards
            aplicarFiltros();
        });
    });
}

// Inicializa os filtros e exibe os cards
configurarFiltros();
aplicarFiltros();