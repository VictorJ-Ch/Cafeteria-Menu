// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
import { getAuth, createUserWithEmailAndPassword } from "firebase/auth";
// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyAwfnmRImMjMhhrBb9vkAifzkjxXvwUlHQ",
    authDomain: "famtime-food.firebaseapp.com",
    projectId: "famtime-food",
    storageBucket: "famtime-food.appspot.com",
    messagingSenderId: "308625184843",
    appId: "1:308625184843:web:a5fc33924854c4c94a55ce",
    measurementId: "G-HWQM4JQF5P"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth(app);

async function createUser(email, password) {
    try {
        const userCredential = await createUserWithEmailAndPassword(auth, email, password);
        const user = userCredential.user;
        console.log("Sign Up", user);
    } catch (error) {
        const errorCode = error.code;
        const errorMessage = error.message;
        console.error(errorMessage);
    }
}

createUser("Example@gmsil.com", "Hello123");