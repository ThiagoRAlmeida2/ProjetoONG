<title>CRUD de Pets</title>

<?php include "Componentes/header.php" ?>

<body>
    <main>
        <form id="petForm" class="petForm">
            <h2>Cadastro de Pets</h2>
            
            <input placeholder="Nome" type="text" id="petNome" required>

            <select id="petSexo" required>
                <option value="">Sexo</option>
                <option value="macho">Macho</option>
                <option value="fêmea">Fêmea</option>
            </select>

            <input placeholder="Idade" type="number" id="petIdade" required>

            <input placeholder="Raça" type="text" id="petRaca" required>

            <select aria-placeholder="Porte" id="petPorte" required>
                <option value="">Porte</option>
                <option value="pequeno">Pequeno</option>
                <option value="médio">Médio</option>
                <option value="grande">Grande</option>
            </select>

            <input type="file" id="petFoto" accept="image/*">

            <button type="submit">Adicionar Pet</button>
        </form>

        <section class="section-tabelaPets">
            <h2>Lista de Pets</h2>

            <section id="tabelaPets" class="tabelaPets">
            </section>
        </section>
    </main>

    <script type="module" src="./JavaScript/adicionarPet.js"></script>

<?php include "Componentes/footer.php" ?>