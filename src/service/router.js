import { createRouter } from "routerjs";

// Criar instancia para a rota
const router = createRouter()
// Defina a rota que corresponde a um caminho com um retorno de chamada
  .get('/user', (req, context) => {
    // Manipule a rota aqui...
  })
 
// Chamar "run" executará os manipuladores imediatamente para a url atual.
// Você pode evitar chamá-lo e esperar pela próxima mudança de rota.
  .run();