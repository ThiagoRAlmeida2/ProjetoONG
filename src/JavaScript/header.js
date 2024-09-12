// JavaScript/header.js
document.addEventListener("DOMContentLoaded", function () {
    fetch("../Componentes/header.php")
        .then(response => response.text())
        .then(data => {
            document.getElementById("header-placeholder").innerHTML = data;
        });
});
