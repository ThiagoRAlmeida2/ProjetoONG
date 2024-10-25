
const botoesFiltro = document.querySelectorAll('.btn-filtro');

botoesFiltro.forEach(btn => {
    btn.addEventListener('click', () => {
        btn.classList.toggle('filtro-ativo');
    });
});
