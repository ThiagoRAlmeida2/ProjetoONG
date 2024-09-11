// JavaScript/header.js
document.addEventListener("DOMContentLoaded", function () {
    fetch("../Componentes/header.html")  // Caminho para o header.html
        .then(response => response.text())
        .then(data => {
            document.getElementById("header-placeholder").innerHTML = data;
        });
});
