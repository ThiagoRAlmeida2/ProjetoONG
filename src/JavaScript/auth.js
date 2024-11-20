function authenticate() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    if (email === "recomecosprojeto@gmail.com" && password === "OngPets12!") {
        // Armazena a sessão de login e redireciona
        localStorage.setItem("authenticated", "true");
        window.location.href = "admin.html";
    } else {
        document.getElementById("errorMessage").innerText = "Email ou senha incorretos!";
    }
}
