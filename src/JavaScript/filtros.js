// Referências aos grupos de filtros e ao catálogo
const petFilterGroup = document.getElementById('pet-filter');
const sizeFilterGroup = document.getElementById('size-filter');
const catalog = document.getElementById('catalog');

// Função para capturar as opções selecionadas em um grupo de checkboxes
function getSelectedValues(group) {
    return Array.from(group.querySelectorAll('input:checked')).map(input => input.value);
}

// Função para atualizar o catálogo com base nas seleções
function updateCatalog() {
    const selectedPets = getSelectedValues(petFilterGroup);
    const selectedSizes = getSelectedValues(sizeFilterGroup);

    const petText = selectedPets.length > 0 ? selectedPets.join(', ') : 'Nenhum';
    const sizeText = selectedSizes.length > 0 ? selectedSizes.join(', ') : 'Nenhum';

    catalog.innerHTML = `Mostrando produtos para: ${petText} de tamanho ${sizeText}`;
}

// Adiciona eventos de mudança nos checkboxes para atualizar o catálogo imediatamente
[petFilterGroup, sizeFilterGroup].forEach(group => {
    group.addEventListener('change', updateCatalog);
});
