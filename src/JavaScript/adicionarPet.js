import { db } from '../service/firebase.js';
import { getStorage, ref, uploadBytes, getDownloadURL } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-storage.js";
import { collection, addDoc, updateDoc, getDocs, doc, deleteDoc } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-firestore.js";

// Inicializa Firebase Storage
const storage = getStorage();
const petForm = document.getElementById("petForm");

// Adiciona evento ao formulário
petForm.addEventListener("submit", async function (e) {
    e.preventDefault();

    const nome = document.getElementById("petNome").value;
    const idade = document.getElementById("petIdade").value;
    const raca = document.getElementById("petRaca").value;
    const caracteristica = document.getElementById("petCaracteristica").value;
    const petFoto = document.getElementById("petFoto").files[0]; // Foto selecionada
    const petId = document.getElementById("petId").value;

    try {
        let fotoUrl = "";

        if (petFoto) {
            const storageRef = ref(storage, `pets/${petFoto.name}`);
            await uploadBytes(storageRef, petFoto);
            fotoUrl = await getDownloadURL(storageRef);
        
            // Verifique se a URL da foto foi recuperada corretamente
            if (!fotoUrl) {
                throw new Error("URL da foto não pôde ser recuperada.");
            }
        }        

        const petData = {
            nome,
            idade,
            raca,
            caracteristica,
            foto: fotoUrl // URL da foto
        };

        if (petId) {
            // Edita pet existente
            await updateDoc(doc(db, "pets", petId), petData);
        } else {
            // Adiciona novo pet
            await addDoc(collection(db, "pets"), petData);
        }

        petForm.reset();
        document.getElementById("petId").value = ""; // Limpa ID após salvar
        carregarPets();
    } catch (error) {
        console.error("Erro ao salvar o pet:", error);
    }
});

// Função para carregar os pets
async function carregarPets() {
    try {
        const querySnapshot = await getDocs(collection(db, "pets"));
        const petTable = document.getElementById("petTable").getElementsByTagName("tbody")[0];
        petTable.innerHTML = "";

        querySnapshot.forEach((doc) => {
            const pet = doc.data();
            const row = petTable.insertRow();

            row.innerHTML = `
                <td><img src="${pet.foto}" alt="Foto do Pet" width="100"></td>
                <td>${pet.nome}</td>
                <td>${pet.idade}</td>
                <td>${pet.raca}</td>
                <td>${pet.caracteristica}</td>
                <td>
                    <button onclick="editarPet('${doc.id}', '${pet.nome}', '${pet.idade}', '${pet.raca}', '${pet.caracteristica}')">Editar</button>
                    <button onclick="deletarPet('${doc.id}')">Deletar</button>
                </td>
            `;
        });
    } catch (error) {
        console.error("Erro ao carregar pets:", error);
    }
}

// Funções globais para editar e deletar pets
window.editarPet = function (id, nome, idade, raca, caracteristica) {
    document.getElementById("petId").value = id;
    document.getElementById("petNome").value = nome;
    document.getElementById("petIdade").value = idade;
    document.getElementById("petRaca").value = raca;
    document.getElementById("petCaracteristica").value = caracteristica;
};

window.deletarPet = async function (id) {
    try {
        await deleteDoc(doc(db, "pets", id));
        carregarPets(); // Recarrega a lista de pets
    } catch (error) {
        console.error("Erro ao deletar pet:", error);
    }
};

// Carrega pets ao iniciar a página
carregarPets();
