<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/resets.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    </head>

    <body>    
        <header>
            <h2 onclick="home()">Projeto Recomeços</h2>
                
            <nav class="toolbar-actions">
                <ul>
                    <li onclick="pets()">Conheça os Pets</li>

                    <li onclick="doacao()">Doações</li>

                    <li onclick="quemSomos()">Quem somos</li>

                    <li onclick="contatos()"> Contato</li>
                </ul>
            </nav>    
        </header>

        <script>
            function home(){
                window.location.href="home.php";
            }
            function doacao(){
                window.location.href="pets.php";
            }
            function quemSomos(){
                window.location.href="doacao.php";
            }
            function quemSomos(){
                window.location.href="quemSomos.php";
            }
            function doacao(){
                window.location.href="contatos.php";
            }
        </script>
    </body>
</html>