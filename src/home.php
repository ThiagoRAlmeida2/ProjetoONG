<?php
$titulo = "Projeto Recomeços";
include 'Componentes/header.php'; 
?>

<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400&display=swap" rel="stylesheet">
</head>
<main>
    <div>
        <!-- PRIMEIRO BLOCO - FOTO 'NOSSO LAR' -->
        <!-- Foto do local com uma descricao dizendo Nosso Lar -->
        <img src="assets/images/dog_aleatorio.jpg">
        <h1>Nosso abrigo</h1>
    </div>

    <div class="container">
        <!-- SEGUNDO BLOCO - HISTORIA DO PROJETO -->
        <!-- Descricao da historia do projeto deles -->
         <div class="texto-direita">
            <h2 class="texto-titulo">A historia do projeto</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
        <img class="img-esquerda" src="assets/images/dog_aleatorio.jpg">
    </div>

    <div class="container">
        <!-- TERCEIRO BLOCO - TRES IMAGENS -->
        <!-- Serao tres imagens, com tres botoes em cada img --> 
        <div class="image-container">
            <img src="assets/images/dog_aleatorio.jpg">
            <button class="button" id="button-overlay">Quero apadrinhar!</button>
        </div>
        <div class="image-container">
            <img src="assets/images/dog_aleatorio.jpg">
            <button class="button" id="button-overlay">Fazer doacao</button> 
        </div>
        <div class="image-container">
            <img src="assets/images/dog_aleatorio.jpg">
            <button class="button" id="button-overlay">Quero adotar!</button>
        </div>
    </div>

    <div class="ciclo-resgate">
        <!-- QUARTO BLOCO - CICLO DE RESGATE -->
        <h2 class="texto-centralizado">Ciclo de resgate</h2>
        <p class="texto-centralizado">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="container">
        <!-- QUINTO BLOCO - CASE DE SUCESSO com imagem -->
        <img class="img-direita" src="assets/images/dog_aleatorio.jpg">
        <div class="texto-esquerda">
            <h2 class="texto-titulo">Case de sucesso</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>  
    </div>
</main>

<script src="/JavaScript/index.js"></script>

    <?php include 'Componentes/slides.php' ?>
</main>
<?php include 'Componentes/footer.php'; ?>
<script src="/JavaScript/index.js"></script>
<script src="/JavaScript/slides.js"></script>
