import { auth } from "../service/firebase";
import { signInWithEmailAndPassword } from "firebase/auth";

// Função de Login
document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();  // Evita o reload da página ao submeter o formulário

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    signInWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
            const user = userCredential.user;
            alert(`Bem-vindo, ${user.email}!`);
        })
        .catch((error) => {
            console.error('Erro ao fazer login:', error.message);
            alert('Erro ao fazer login: ' + error.message);
        });
});