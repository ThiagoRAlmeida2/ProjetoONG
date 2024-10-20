<!DOCTYPE html>

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

                    <div>
                        <button type="reset">Limpar</button> <br>
                        <button type="get">Aplicar</button>
                    </div>
                    </form>
                </div>
                    
                <div class="div-pets">
                    <div class="pet-card"></div>
                    <div class="pet-card"></div>
                    <div class="pet-card"></div>
                    <div class="pet-card"></div>
                </div>
            </section>

        </main>

    <?php include 'Componentes/footer.php'; ?>