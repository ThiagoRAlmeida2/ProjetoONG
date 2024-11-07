
import { db } from '../service/firebase.js';
import { collection, getDocs } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-firestore.js";


function rolarParaPets() {
    document.querySelector('#section-pets').scrollIntoView({ behavior: 'smooth' 
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const linkBemVindo = document.querySelector('.container.bemVindo');
    if (linkBemVindo) {
        linkBemVindo.addEventListener('click', rolarParaPets);
    }
});

    let petsLista = [];

    let filtrosAtivos = {
        raca: [],
        porte: [],
        idade: [],
        sexo: [],
    };

async function carregarDadosPets() {
    try {
        const querySnapshot = await getDocs(collection(db, "pets"));
        petsLista = querySnapshot.docs.map(doc => ({ id: doc.id, ...doc.data() }));
        aplicarFiltros();
    } catch (error) {
        console.error("Erro ao carregar dados dos pets:", error);
    }
}

function aplicarFiltros() {
    const catalogo = document.getElementById('catalogo-pets');
    catalogo.innerHTML = ''; 

    const petsFiltrados = petsLista.filter(pet => {
        const racaFiltro = !filtrosAtivos.raca.length || 
                            filtrosAtivos.raca.includes(pet.raca);
        const porteFiltro = !filtrosAtivos.porte.length || 
                            filtrosAtivos.porte.includes(pet.porte);
        const idadeFiltro = !filtrosAtivos.idade.length || 
                            filtrosAtivos.idade.includes(pet.idade);
        const sexoFiltro = !filtrosAtivos.sexo.length || 
                            filtrosAtivos.sexo.includes(pet.sexo);        

        return racaFiltro && porteFiltro && idadeFiltro && sexoFiltro;
    });

    petsFiltrados.forEach(pet => {
        const petCard = document.createElement('div');
        petCard.classList.add('pet-card');

        petCard.innerHTML = `           
                <div class="img-box">
                    <img src="${pet.img}" aalt="Foto ${pet.sexo.toLowerCase() === 'macho' ? 'do' : 'da'} ${pet.raca.toLowerCase() === 'canino' ? (pet.sexo.toLowerCase() === 'macho' ? 'cão' : 'cadela') : 
                        (pet.raca.toLowerCase() === 'felino' ? (pet.sexo.toLowerCase() === 'macho' ? 'gato' : 'gata') : '')} ${pet.nome}.">
                </div>

                <div class="pet-about">
                    <h3>${pet.nome}</h3>
                        <p>${pet.sexo}</p>
                    <p>${
                        pet.castrado.toLowerCase() === 'sim' ?
                            (pet.sexo.toLowerCase() === 'macho' ? 'Castrado' : 'Castrada')
                            : (pet.sexo.toLowerCase() === 'macho' ? '' : '')
                    }</p>
                        <p>${
                            pet.vacinado.toLowerCase() === 'sim' ?
                                (pet.sexo.toLowerCase() === 'macho' ? 'Vacinado' : 'Vacinada')
                                : (pet.sexo.toLowerCase() === 'macho' ? '' : '')
                        }</p>
                    <p>${
                        pet.vermifugado.toLowerCase() === 'sim' ?
                            (pet.sexo.toLowerCase() === 'macho' ? 'Vermifugado' : 'Vermifugada')
                            : (pet.sexo.toLowerCase() === 'macho' ? '' : '')
                    }</p>
                        <p>${
                            pet.desparasitado.toLowerCase() === 'sim' ?
                                (pet.sexo.toLowerCase() === 'macho' ? 'Desparasitado' : 'Desparasitada')
                                : (pet.sexo.toLowerCase() === 'macho' ? '' : '')
                        }</p>
                </div>
        `;
        catalogo.appendChild(petCard);
    });
}

function configurarFiltros() {
    const botoesFiltro = document.querySelectorAll('.btn-filtro');

    botoesFiltro.forEach(botao => {
        botao.addEventListener('click', () => {
            const tipo = botao.dataset.raca || 
                         botao.dataset.porte || 
                         botao.dataset.idade || 
                         botao.dataset.sexo;

            const categoria = botao.dataset.raca ? 'raca' : 
                              botao.dataset.porte ? 'porte' : 
                              botao.dataset.idade  ? 'idade' : 'sexo';

            botao.classList.toggle('filtro-ativo');

            if (botao.classList.contains('filtro-ativo')) {
                filtrosAtivos[categoria].push(tipo);
            } else {
                filtrosAtivos[categoria] = filtrosAtivos[categoria].filter(f => f !== tipo);
            }
            aplicarFiltros();
        });
    });
}

configurarFiltros();
carregarDadosPets();