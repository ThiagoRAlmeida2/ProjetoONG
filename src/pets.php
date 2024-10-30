
<title>Conheça os Pets</title>

<?php include 'Componentes/header.html'; ?>
    
    <main>
        <div class="container" id="bemVindo">
            <p>Seja bem-vindo a nossa</p>
            <h1>Página de Adoção!</h1>
        </div>
        
        <section class="section-pets">
            <section class="filtros" id="filtros">

                <div class="filtro">
                    <h3>Raça</h3>

                    <div>
                        <button class="btn-filtro" data-raca="Canino">Canino</button>
                        <button class="btn-filtro" data-raca="Felino">Felino</button>
                    </div>
                </div>
                
                <hr>

                <div class="filtro">
                    <h3>Sexo</h3>

                    <div>
                        <button class="btn-filtro" data-sexo="Fêmea">Fêmea</button>
                        <button class="btn-filtro" data-sexo="Macho">Macho</button>
                    </div>
                </div> 

                    <hr>

                <div class="filtro">
                    <h3>Porte</h3>
                    
                    <div>
                        <button class="btn-filtro" data-porte="Grande" alt="mais de 25kg">Grande</button>
                        <button class="btn-filtro" data-porte="Médio" alt="até de 25kg">Médio</button>
                        <button class="btn-filtro" data-porte="Pequeno" alt="até de 10kg">Pequeno</button>
                    </div>
                </div> 

                    <hr>

                <div class="filtro">
                    <h3>Idade</h3>

                    <div>
                        <button class="btn-filtro" data-idade="Idoso" alt="mais de 10 anos">Idoso</button>
                        <button class="btn-filtro" data-idade="Adulto" alt="até 10 anos">Adulto</button>
                        <button class="btn-filtro" data-idade="Jovem" alt="até 5 anos">Jovem</button>
                        <button class="btn-filtro" data-idade="Filhote" alt="menos de 5 anos">Filhote</button>
                    </div>
                </div> 
            </section>
                
            <section class="catalogo-pets" id="catalogo-pets">
            </section>
        </section>

        <hr class="pets-line">

        <div class="container" id="exemplo">
            <h1>Exemplo</h1>
        </div>
    </main>

    <script src="./JavaScript/pets.js"></script>
    <script src="./JavaScript/catalogoPets.js"></script>

<?php include 'Componentes/footer.html'; ?>