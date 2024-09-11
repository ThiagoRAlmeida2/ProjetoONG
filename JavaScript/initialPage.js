const authorizedEmail = ''; // email da ong. só para testar
let emailVerificado = false;

function verificarEmail() {
    const userEmail = document.getElementById('userEmail').value;
    emailVerificado = true;

    if (userEmail === authorizedEmail) {
        document.getElementById('adicionarPet').style.display = 'inline-block';
        document.getElementById('erroEmail').style.display = 'none';
    } else {
        document.getElementById('adicionarPet').style.display = 'none';
        document.getElementById('erroEmail').style.display = 'block';
    }
}

function adicionarPet() {
    alert('Pet adicionado com sucesso!');
}