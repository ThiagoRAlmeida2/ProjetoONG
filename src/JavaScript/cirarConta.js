import { auth } from "../service/firebase";
import {createUserWithEmailAndPassword } from "firebase/auth";

// Função de Criação de Conta
document.getElementById('createAccountBtn').addEventListener('click', function () {
    const email = prompt("Digite seu email:");
    const password = prompt("Digite sua senha:");

    if (email && password) {
        createUserWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                const user = userCredential.user;
                alert(`Conta criada com sucesso! Bem-vindo, ${user.email}!`);
            })
            .catch((error) => {
                console.error('Erro ao criar conta:', error.message);
                alert('Erro ao criar conta: ' + error.message);
            });
    } else {
        alert('Por favor, insira um email e senha válidos.');
    }
});

