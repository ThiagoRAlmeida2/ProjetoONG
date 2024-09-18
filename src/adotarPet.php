<?php
$titulo = "Adote um Pet";
include '../Componentes/header.php';
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Css/adotarPet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
<body>
<div>
    <h1>Bem-vindo à página de Pets</h1>

    <!-- Campo de entrada para o usuário digitar o email -->
    <input type="email" id="userEmail" placeholder="Digite seu email">
    <button onclick="verificarEmail()">Verificar</button>

    <!-- O botão "Adicionar Pet" só aparece se o email for o correto -->
    <button id="adicionarPet" style="display: none;" onclick="adicionarPet()">Adicionar Pet</button>

    <!-- Exibe uma mensagem de erro se o email não for autorizado -->
    <p id="erroEmail" style="display: none;">Email não autorizado!</p>
</div>

<script src="../../JavaScript/adotarPet.js"></script>
</body>


<?php
include '../Componentes/footer.php';
?>