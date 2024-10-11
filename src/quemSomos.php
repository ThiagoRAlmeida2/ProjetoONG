<?php
$titulo = "Quem somos nós?";
include 'Componentes/header.php';
?>

<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/quemSomos.css">
    <style>
        
    </style>
</head>

<body>
    <div>
        <h1>QUEM SOMOS</h1>
        <div class="team-container">
            <div class="team-member">
            <img src="assets/images/transferir.png" alt="Amanda">
                <h3>Amanda</h3>
                <p>Enfermeira</p>
            </div>
            <div class="team-member">
                <img src="https://via.placeholder.com/150" alt="Ana Mariano">
                <h3>Ana Mariano</h3>
                <p>Produtora</p>
            </div>
            <div class="team-member">
                <img src="https://via.placeholder.com/150" alt="Bruna Eiras">
                <h3>Bruna Eiras</h3>
                <p>Enfermeira</p>
            </div>
            <div class="team-member">
                <img src="https://via.placeholder.com/150" alt="Bruna Hernandez">
                <h3>Bruna Hernandez</h3>
                <p>Enfermeira</p>
            </div>
            <!-- Adicione mais membros aqui -->
        </div>
    </div>
</body>

<?php include 'Componentes/footer.php'; ?>
<script src="../../JavaScript/index.js"></script>
