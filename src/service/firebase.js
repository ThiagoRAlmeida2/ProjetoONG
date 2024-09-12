import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { getAuth } from "firebase/auth";

const firebaseConfig = {
    apiKey: "AIzaSyDGUxzXkSZSVMKhvlJZIOo1iFRMrajOBCQ",
    authDomain: "projetoong-2a807.firebaseapp.com",
    projectId: "projetoong-2a807",
    storageBucket: "projetoong-2a807.appspot.com",
    messagingSenderId: "38027928310",
    appId: "1:38027928310:web:be14a430fb45f61da982d7",
    measurementId: "G-BVZQHY9312"
};

const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app);

export { auth };
