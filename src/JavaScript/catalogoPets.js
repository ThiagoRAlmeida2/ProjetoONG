
function mostrarPets() {
    let section = document.getElementById("catalogo-pets");

    let petsNum = 12;
    let petsListaExibida = petsLista.slice(0, petsNum);

    let petsAmostra = "";

    for (let pet of petsListaExibida) {
        petsAmostra += `
            <div class="pet-card">
                <img src="${pet.img}" alt="${pet.nome}">

                <div class="pet-about">
                    <h3>${pet.nome}</h3>

                    <p>${pet.castrado 
                            ? (pet.sexo.toLowerCase() === "macho" ? "Castrado" : "Castrada") 

                            : (pet.sexo.toLowerCase() === "macho" ? "Não castrado" : "Não castrada")
                        }
                    </p>

                    <p>${pet.sexo}</p>
                </div>                        
            </div>
        `;
    }

    section.innerHTML = petsAmostra;
}

mostrarPets();