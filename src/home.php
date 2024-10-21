<?php
$titulo = "Projeto Recomeços";
include 'Componentes/header.php'; 
?>

<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
</head>
<main>
    <div>
        <h1>Bem-vindo ao Projeto Recomeços</h1>
        <p>Descrição ou conteúdo principal da página.</p>
    </div>
    <?php include 'Componentes/slides.php' ?>
</main>
<?php include 'Componentes/footer.php'; ?>
<script src="/JavaScript/index.js"></script>
<script src="/JavaScript/slides.js"></script>