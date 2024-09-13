<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Recomeços</title>
    <link rel="stylesheet" href="../../Css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <div class="toolbar">
        <div class="toolbar-header">
            <div class="menu-header"></div>
            <div class="toolbar-title">
                <i class="fas fa-project-diagram"></i> Projeto Recomeços
            </div>
            <div class="toolbar-actions">
                <button class="btn adopt-btn" onclick="adoptPets()">
                    <i class="fas fa-paw"></i> Adotar Pets
                </button>
                <button class="btn contact-btn" onclick="scrollToFooter()">
                    <i class="fas fa-address-book"></i> Contatos
                </button>
            </div>
        </div>
    </div>
</header>

<script>
    function adoptPets() {
        window.location.href = '../Pages/adotarPet.php';
    }

    function scrollToFooter() {
        document.getElementById("footer").scrollIntoView({ behavior: "smooth" });
    }
</script>
</body>
</html>
