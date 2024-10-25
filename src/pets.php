
<title>Conheça os Pets</title>

<?php include 'Componentes/header.php'; ?>
    
    <main>
        <div class="bemVindo">
            <p>Seja bem-vindo a nossa</p>
            <h1>Página de Adoção!</h1>
        </div>
        
        <section class="section-pets">
            <section class="filtros">

                <div class="filtro">
                    <h3>Raças</h3>

                    <div>
                        <button class="btn-filtro" id="btn-filtro">Canino</button>
                        <button class="btn-filtro" id="btn-filtro">Felino</button>
                    </div>
                </div>                

                    <hr>

                <div class="filtro">
                    <h3>Porte</h3>
                    
                    <div>
                        <button class="btn-filtro" id="btn-filtro" alt="mais de 25kg">Grande</button>
                        <button class="btn-filtro" id="btn-filtro" alt="até de 25kg">Médio</button>
                        <button class="btn-filtro" id="btn-filtro" alt="até de 10kg">Pequeno</button>
                    </div>
                </div> 

                    <hr>

                <div class="filtro">
                    <h3>Idade</h3>

                    <div>
                        <button class="btn-filtro" id="btn-filtro">Idoso</button>
                        <button class="btn-filtro" id="btn-filtro">Adulto</button>
                        <button class="btn-filtro" id="btn-filtro">Filhote</button>
                    </div>
                </div> 

                    <hr>

                <div class="filtro">
                    <h3>Sexo</h3>

                    <div>
                        <button class="btn-filtro" id="btn-filtro">Fêmea</button>
                        <button class="btn-filtro" id="btn-filtro">Macho</button>
                    </div>
                </div> 
            </section>
                
            <section class="catalogo-pets" id="catalogo-pets">
            </section>
        </section>

        <hr class="pets-line">

    </main>

    <script src="./JavaScript/pets.js"></script>
    <script src="./JavaScript/catalogoPets.js"></script>
    <script src="./JavaScript/filtros.js"></script>

<?php include 'Componentes/footer.php'; ?>