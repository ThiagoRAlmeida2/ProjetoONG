<?php
$titulo = "Projeto Recomeços";
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $titulo; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../../Css/header.css">
        <link rel="stylesheet" href="../../Css/style.css">
        <link rel="stylesheet" href="../../Css/footer.css">
    </head>

    <body>

        <?php include '../Componentes/header.php'; ?>

        <div>
            <h1>Bem-vindo ao Projeto Recomeços</h1>
            <p>Descrição ou conteúdo principal da página.</p>
        </div>

        <?php include '../Componentes/footer.php'; ?>

    </body>

    <script src="../../JavaScript/index.js"></script>
</html>