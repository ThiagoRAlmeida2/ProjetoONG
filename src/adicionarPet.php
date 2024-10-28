
<title>CRUD de Pets</title>
<link rel="stylesheet" href="./css/adicionarPet.css">

<?php include "Componentes/header.php" ?>

    <body>
        <main>

        </main>

        <div class="container">
            <h1>Cadastro de Pets</h1>
            <form id="petForm">
                <input type="hidden" id="petId"> <!-- Campo oculto para ID do pet -->
                
                <label for="petFoto">Foto do Pet:</label>
                <input type="file" id="petFoto" accept="image/*"><br><br>
                
                <label for="petNome">Nome:</label>
                <input type="text" id="petNome" required><br><br>

                <label for="petIdade">Idade:</label>
                <input type="number" id="petIdade" required><br><br>

                <label for="petRaca">Raça:</label>
                <input type="text" id="petRaca" required><br><br>

                <label for="petCaracteristica">Característica:</label>
                <input type="text" id="petCaracteristica" required><br><br>

                <button type="submit">Adicionar Pet</button>
            </form>

            <h2>Lista de Pets</h2>
            <table id="petTable">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Raça</th>
                        <th>Característica</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

    <script type="module" src="./JavaScript/adicionarPet.js"></script>

<?php include "Componentes/footer.php" ?>