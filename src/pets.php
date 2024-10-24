
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

                        <hr>

                    <ul id="animal">
                        <h3>Animais</h3>

                        <li>
                            <input class="filtro" name="animal" value="canino" type="checkbox"> 
                            <label>Canino</label>
                        </li>
                        <li>
                            <input class="filtro" name="animal" value="felino" type="checkbox"> 
                            <label>Felino</label>
                        </li>
                    </ul>

                        <hr>

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

                        <hr>

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

                        <hr>

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