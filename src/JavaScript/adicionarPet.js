import { db } from '../service/firebase.js';
import { getStorage, ref, uploadBytes, getDownloadURL } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-storage.js";
import { collection, addDoc, updateDoc, getDocs, doc, deleteDoc, getDoc } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-firestore.js";

const storage = getStorage();
const petForm = document.getElementById("petForm");

let atualId = 0; 

async function proxId() {
    const petsSnapshot = await getDocs(collection(db, "pets"));
    atualId = petsSnapshot.size;

    return String(atualId + 1).padStart(3, '0'); 
}

petForm.addEventListener("submit", async function (e) {
    e.preventDefault();

    const Id = document.getElementById("petId").value;

        const nome = document.getElementById("petNome").value;
        const sexo = document.getElementById("petSexo").value;
        const idade = document.getElementById("petIdade").value;
        const raca = document.getElementById("petRaca").value;
        const porte = document.getElementById("petPorte").value;

    const imgPet = document.getElementById("petFoto").files[0];

        const castrado = document.getElementById("Castrado").value;
        const vacinado = document.getElementById("Vacinado").value;
        const vermifugado = document.getElementById("Vermifugado").value;
        const desparasitado = document.getElementById("Desparasitado").value;


    try {
        let imgURL = "";

        if (imgPet) {
            const storageRef = ref(storage, `pets/${imgPet.name}`);
            await uploadBytes(storageRef, imgPet);
            imgURL = await getDownloadURL(storageRef);
        
            if (!imgURL) {
                throw new Error("URL da foto não pôde ser recuperada.");
            }
        } else if (Id) {
            const petDoc = await getDoc(doc(db, "pets", Id));
            if (petDoc.exists()) {
                imgURL = petDoc.data().img || "";
            }
        }       

        const petData = {
            id: await proxId(),

            nome,
            sexo,
            idade,
            raca,
            porte,

            castrado,
            vacinado,
            vermifugado,
            desparasitado,

            img: imgURL
        };

        if (imgURL) {
            petData.img = imgURL;
        }

        if (Id) {
            await updateDoc(doc(db, "pets", Id), petData);
        } else {
            await addDoc(collection(db, "pets"), petData); 
        }

        petForm.reset();
        document.getElementById("petId").value = "";
        carregarPets();
    } catch (error) {
        console.error("Erro ao salvar o pet:", error);
    }
});

async function carregarPets() {
    try {
        const mostrarpets = await getDocs(collection(db, "pets"));
        const catalogoPets = document.getElementById("tabelaPets");
        catalogoPets.innerHTML = "";

        mostrarpets.forEach((pets) => {
            const pet = pets.data();            
            const petCard = document.createElement('div');
            petCard.classList.add('pet-card');

            const sexo = pet.sexo ? pet.sexo.toLowerCase() : 'desconhecido';
            const raca = pet.raca ? pet.raca.toLowerCase() : 'desconhecida';
            const nome = pet.nome ? pet.nome : 'desconhecido';

            petCard.innerHTML = `
                <div class="img-box-solid">
                    <img src="${pet.img}" alt="Foto ${sexo === 'macho' ? 'do' : 'da'} ${raca === 'canino' ? (sexo === 'macho' ? 'cão' : 'cadela') : 
                        (raca === 'felino' ? (sexo === 'macho' ? 'gato' : 'gata') : '')} ${nome}.">
                </div>

                <h3>${pet.nome}</h3>
            
                <div class="pet-about">
                    <p>Sexo: ${pet.sexo}</p>
                    <p>Idade: ${pet.idade}</p>
                    <p>Raça: ${pet.raca}</p>
                    <p>Porte: ${pet.porte}</p>

                        <hr>

                    <p>castrado: ${pet.castrado}</p>
                    <p>vacinado: ${pet.vacinado}</p>
                    <p>vermifugado: ${pet.vermifugado}</p>
                    <p>desparasitado: ${pet.desparasitado}</p>
                </div>

                <div class="btn-div">
                    <button onclick="editarPet('${pets.id}', '${pet.nome}', '${pet.sexo}', '${pet.idade}', '${pet.raca}', '${pet.porte}', '${pet.img}', '${pet.castrado}', '${pet.vacinado}', '${pet.vermifugado}', '${pet.desparasitado}')">Editar</button>

                    <button onclick="deletarPet('${pets.id}')">Deletar</button>
                </div>
            `;
            catalogoPets.appendChild(petCard);
        });
    } catch (error) {
        console.error("Erro ao carregar pets:", error);
    }
}

window.editarPet = function (id, nome, sexo, idade, raca, porte, img, castrado, vacinado, vermifugado, desparasitado) {
    document.getElementById("petId").value = id;

    document.getElementById("petNome").value = nome;
    document.getElementById("petSexo").value = sexo;
    document.getElementById("petIdade").value = idade;
    document.getElementById("petRaca").value = raca;
    document.getElementById("petPorte").value = porte;

    document.getElementById("Castrado").value = castrado;
    document.getElementById("Vacinado").value = vacinado;
    document.getElementById("Vermifugado").value = vermifugado;
    document.getElementById("Desparasitado").value = desparasitado;

    const imgElement = document.getElementById("petImgPreview");

    if (img) {
        imgElement.src = img; 
        imgElement.style.display = 'block';
    } else {
        imgElement.style.display = 'none'; 
    }
};

const petFotoInput = document.getElementById("petFoto");
const imgPreview = document.getElementById("petImgPreview");

petFotoInput.addEventListener("change", function () {
    const file = petFotoInput.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            imgPreview.src = e.target.result;
            imgPreview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    } else {
        imgPreview.style.display = 'none';
    }
});

window.deletarPet = async function (id) {
    try {
        await deleteDoc(doc(db, "pets", id));
        carregarPets();
    } catch (error) {
        console.error("Erro ao deletar pet:", error);
    }
};

carregarPets();