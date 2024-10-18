<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/resets.css">
    </head>
    <body>    
        <header>
            <h2 onclick="home()">Projeto Recomeços</h2>
            <a href="../home.php">
                <h2>Projeto Recomeços</h2>
            </a>
                
            <nav class="toolbar-actions">
                <ul>
                    <li onclick="pets()">Conheça os Pets</li>
                    <a href="../pets.php">
                        <li>Conheça os Pets</li>
                    </a>
                    <li onclick="doacao()">Doações</li>
                    <a href="../doar.php">
                        <li>Doar</li>                            
                    </a>
                    <li onclick="quemSomos()">Quem somos</li>
                    <a href="../quemSomos.php">
                        <li>Quem somos</li>
                    </a>
                    <li onclick="contatos()"> Contato</li>
                    <a href="../contato.php">
                        <li>Contato</li>
                    </a>
                </ul>
            </nav>    
        </header>
    </body>
</html>

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