import { initializeApp } from "firebase/app";
import { getAuth} from 'firebase/auth';
import { getFirestore } from "firebase/firestore";

// Configuração do Firebase
const firebaseConfig = {
    apiKey: "AIzaSyAZFfWi-01PgAZuNj5KOZTMOo2mTO6ot9s",
    authDomain: "projeto-recomecos.firebaseapp.com",
    projectId: "projeto-recomecos",
    storageBucket: "projeto-recomecos.appspot.com",
    messagingSenderId: "1000020937824",
    appId: "1:1000020937824:web:da0e9506467564ca50c705",
    measurementId: "G-LMPLJNP6WV"
};

// Inicializa Firebase
const app = initializeApp(firebaseConfig);
export const auth = getAuth(app);
export const db = getFirestore(app);