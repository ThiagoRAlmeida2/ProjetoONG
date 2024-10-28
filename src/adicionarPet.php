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
            <tbody></tbody>
        </table>
    </div>

    <script type="module">
        import { db, storage } from './src/firebaseConfig.js';
        import { collection, addDoc, updateDoc, deleteDoc, doc } from "firebase/firestore";
        import { ref, uploadBytes, getDownloadURL } from "firebase/storage";

        const petForm = document.getElementById("petForm");

        petForm.addEventListener("submit", async function (e) {
            e.preventDefault();

            const foto = document.getElementById("petFoto").files[0];
            const nome = document.getElementById("petNome").value;
            const idade = document.getElementById("petIdade").value;
            const raca = document.getElementById("petRaca").value;
            const caracteristica = document.getElementById("petCaracteristica").value;
            const petId = document.getElementById("petId").value;

            if (foto && nome && idade && raca && caracteristica) {
                const reader = new FileReader();

                if (petId) {
                    // Editar pet existente
                    if (foto) {
                        const fotoRef = ref(storage, `pets/${foto.name}`);
                        await uploadBytes(fotoRef, foto);
                        const fotoURL = await getDownloadURL(fotoRef);

                        await updateDoc(doc(db, "pets", petId), {
                            nome: nome,
                            idade: idade,
                            raca: raca,
                            caracteristica: caracteristica,
                            fotoURL: fotoURL
                        });
                    } else {
                        await updateDoc(doc(db, "pets", petId), {
                            nome: nome,
                            idade: idade,
                            raca: raca,
                            caracteristica: caracteristica
                        });
                    }
                } else {
                    // Adicionar novo pet
                    const fotoRef = ref(storage, `pets/${foto.name}`);
                    await uploadBytes(fotoRef, foto);
                    const fotoURL = await getDownloadURL(fotoRef);

                    await addDoc(collection(db, "pets"), {
                        nome: nome,
                        idade: idade,
                        raca: raca,
                        caracteristica: caracteristica,
                        fotoURL: fotoURL
                    });
                }

                petForm.reset();
                document.getElementById("petId").value = ""; // Limpa o ID do pet após salvar
                carregarPets();
            }
        });

        async function carregarPets() {
            const querySnapshot = await getDocs(collection(db, "pets"));
            const petTable = document.getElementById("petTable").getElementsByTagName("tbody")[0];
            petTable.innerHTML = "";

            querySnapshot.forEach((doc) => {
                const pet = doc.data();
                const row = petTable.insertRow();

                row.innerHTML = `
                    <td><img src="${pet.fotoURL}" alt="${pet.nome}" width="50"></td>
                    <td>${pet.nome}</td>
                    <td>${pet.idade}</td>
                    <td>${pet.raca}</td>
                    <td>${pet.caracteristica}</td>
                    <td>
                        <button onclick="editarPet('${doc.id}', '${pet.fotoURL}', '${pet.nome}', '${pet.idade}', '${pet.raca}', '${pet.caracteristica}')">Editar</button>
                        <button onclick="deletarPet('${doc.id}')">Deletar</button>
                    </td>
                `;
            });
        }

        window.editarPet = function (id, fotoURL, nome, idade, raca, caracteristica) {
            document.getElementById("petId").value = id;
            document.getElementById("petNome").value = nome;
            document.getElementById("petIdade").value = idade;
            document.getElementById("petRaca").value = raca;
            document.getElementById("petCaracteristica").value = caracteristica;
            document.getElementById("petFoto").value = ""; // Limpar o campo de arquivo para evitar re-upload
        };

        window.deletarPet = async function (id) {
            await deleteDoc(doc(db, "pets", id));
            carregarPets(); // Recarregar a lista de pets
        };

        // Carrega pets ao iniciar a página
        carregarPets();
    </script>
</body>
</html>