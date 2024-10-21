<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/resets.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/pets.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    </head>

    <body>

    <title>Conheça os Pets</title>

    <?php include 'Componentes/header.php'; ?>
        
        <main>
            <div class="bemVindo">
                <p>Seja bem-vindo a nossa</p>
                <h1>Página de Adoção!</h1>
            </div>
            
            <section class="section-pets">
                <div>
                    <form class="filtros">
                    <ul>
                        <h3>Animais</h3>

                        <li>
                            <input type="radio" name="animal" id="animal">
                            <label>Canino</label>
                        </li>

                        <li>
                            <input type="radio" name="animal" id="animal">
                            <label>Felino</label>
                        </li>
                    </ul>

                    <ul>
                        <h3>Porte</h3>

                        <li>
                            <input type="radio" name="porte" id="porte">
                            <label>G (mais de 25kg)</label>
                        </li>

                        <li>
                            <input type="radio" name="porte" id="porte">
                            <label>M (até 25kg)</label>
                        </li>

                        <li>
                            <input type="radio" name="porte" id="porte">
                            <label>P (até 10kg)</label>
                        </li>
                    </ul>

                    <ul>
                        <h3>Idade</h3>

                        <li>
                            <input type="radio" name="idade" id="idade">
                            <label for="">Mais de 10 anos</label>
                        </li>

                        <li>
                            <input type="radio" name="idade" id="idade">
                            <label for="">Até 10 anos</label>
                        </li>

                        <li>
                            <input type="radio" name="idade" id="idade">
                            <label for="">Até 5 anos</label>
                        </li>
                    </ul>

                    <ul>
                        <h3>Sexo</h3>

                        <li>
                            <input type="radio" name="sexo" id="sexo">
                            <label for="">Fêmea</label>
                        </li>

                        <li>
                            <input type="radio" name="sexo" id="sexo">
                            <label for="">Macho</label>
                        </li>
                    </ul>

                    <hr>
                    </form>
                </div>
                    
                <div class="div-pets">
                    <div class="pet-card">
                        <img src="./assets/images/odin.jpg" alt="odin">

                        <div class="pet-about">
                            <h3>Odin</h3>
                            <p>Castrado</p>
                            <p>Macho</p>
                        </div>                        
                    </div>

                    <div class="pet-card">
                        <img src="./assets/images/odin.jpg" alt="odin">

                        <div class="pet-about">
                            <h3>Odin</h3>
                            <p>Castrado</p>
                            <p>Macho</p>
                        </div>                        
                    </div>

                    <div class="pet-card">
                        <img src="./assets/images/odin.jpg" alt="odin">

                        <div class="pet-about">
                            <h3>Odin</h3>
                            
                            <p>Castrado</p>
                            <p>Macho</p>
                        </div>      
                    </div>

                    <div class="pet-card">
                        <img src="./assets/images/odin.jpg" alt="odin">

                        <div class="pet-about">
                            <h3>Odin</h3>

                            <p>Castrado</p>
                            <p>Macho</p>
                        </div>                        
                    </div>

                    <div class="pet-card">
                        <img src="./assets/images/odin.jpg" alt="odin">

                        <div class="pet-about">
                            <h3>Odin</h3>

                            <p>Castrado</p>
                            <p>Macho</p>
                        </div>      
                    </div>

                    <div class="pet-card">
                        <img src="./assets/images/odin.jpg" alt="odin">

                        <div class="pet-about">
                            <h3>Odin</h3>

                            <p>Castrado</p>
                            <p>Macho</p>
                        </div>                        
                    </div>

                    <div class="pet-card">
                        <img src="./assets/images/odin.jpg" alt="odin">

                        <div class="pet-about">
                            <h3>Odin</h3>

                            <p>Castrado</p>
                            <p>Macho</p>
                        </div>      
                    </div>
                </div>
            </section>

            <hr class="pets-line">

        </main>

    <?php include 'Componentes/footer.php'; ?>