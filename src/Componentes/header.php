<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto recomeços</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<header>
    <div class="toolbar">
        <div class="toolbar-header">
            <div class="menu-header"></div>
                <div class="toolbar-title">
                    <button class="btn-home" onclick="home()">
                        <i class="fas fa-project-diagram"></i> Projeto Recomeços
                    </div>
                <div class="toolbar-actions">
                    <button class="btn-adotar" onclick="adotarPet()">
                        <i class="fas fa-paw"></i> Adotar Pet
                    </button>

                    <button class="btn-apadrinhe" onclick="apadrinhe()">
                        <i class="fas fa-hand-holding-heart"></i> Apadrinhe
                    </button>

                    <button class="btn-doacao" onclick="doacao()">
                        <i class="fas fa-donate"></i> Doação
                    </button>

                    <button class="btn-quem-somos" onclick="quemSomos()">
                    <i class="fas fa-users"></i> Quem Somos
                    </button>
                </div>  
            </div>
        </div>
    </div>
</header>

<script>
    function home(){
        window.location.href="home.php";
    }
    function adotarPet(){
        window.location.href="adote.php";
    }
    function apadrinhe(){
        window.location.href="apadrinhe.php";
    }
    function doacao(){
        window.location.href="doe.php";
    }
    function quemSomos(){
        window.location.href="quemSomos.php";
    }
</script>
</body>
</html>