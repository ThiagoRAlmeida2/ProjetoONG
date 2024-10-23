<?php
$titulo = "Quem somos nós?";
include 'Componentes/header.php';
?>

<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quemSomos.css">
       
</head>

<body>
    <div>
        <h1>QUEM SOMOS</h1>
        <div class="team-container">
        <div class="team-member">
                <img src="assets/images/Carolina.jpeg" alt="Carolina">
                <h3>Carolina Schachnik</h3>
                <p>Idealizadora do projeto</p>
            </div>
            <div class="team-member">
                <img src="assets/images/bruna.jpeg" alt="Bruna">
                <h3>Bruna</h3>
                <p>Responsavel pelo gatil</p>
            </div>
            <div class="team-member">
                <img src="assets/images/Leonne.jpeg" alt="Leonne">
                <h3>Leonne Luiz</h3>
                <p>Funcionário</p>
            </div>
            <!-- Adicione mais membros aqui -->
        </div>
    </div>
</body>

<?php include 'Componentes/footer.php'; ?>
<script src="../../JavaScript/index.js"></script>
