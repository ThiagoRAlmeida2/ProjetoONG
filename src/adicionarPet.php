<?php 
include "Componentes/header.php"
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Pets</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        input[type="file"] {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Pets</h1>
        <form id="petForm">
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
            <tbody>
                <!-- Os pets serão listados aqui -->
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById("petForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const foto = document.getElementById("petFoto").files[0];
            const nome = document.getElementById("petNome").value;
            const idade = document.getElementById("petIdade").value;
            const raca = document.getElementById("petRaca").value;
            const caracteristica = document.getElementById("petCaracteristica").value;

            if (foto && nome && idade && raca && caracteristica) {
                const reader = new FileReader();
                reader.onload = function () {
                    adicionarPet(reader.result, nome, idade, raca, caracteristica);
                };
                reader.readAsDataURL(foto);

                // Limpar campos após adicionar
                document.getElementById("petForm").reset();
            }
        });

        function adicionarPet(foto, nome, idade, raca, caracteristica) {
            const table = document.getElementById("petTable").getElementsByTagName("tbody")[0];
            const row = table.insertRow();

            row.innerHTML = `
                <td><img src="${foto}" alt="${nome}" width="50"></td>
                <td>${nome}</td>
                <td>${idade}</td>
                <td>${raca}</td>
                <td>${caracteristica}</td>
                <td>
                    <button onclick="editarPet(this)">Editar</button>
                    <button onclick="deletarPet(this)">Deletar</button>
                </td>
            `;
        }

        function editarPet(button) {
            const row = button.parentNode.parentNode;
            const cells = row.getElementsByTagName("td");

            document.getElementById("petNome").value = cells[1].innerHTML;
            document.getElementById("petIdade").value = cells[2].innerHTML;
            document.getElementById("petRaca").value = cells[3].innerHTML;
            document.getElementById("petCaracteristica").value = cells[4].innerHTML;

            deletarPet(button);
        }

        function deletarPet(button) {
            const row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>
</html>
