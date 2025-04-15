
// Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyAscTmQdGVplzbfF4SVmvUz5DVlY2kBDnE",
  authDomain: "canteen-loginregister.firebaseapp.com",
  projectId: "canteen-loginregister",
  storageBucket: "canteen-loginregister.appspot.com",
  messagingSenderId: "139735208282",
  appId: "1:139735208282:web:4bbc450349c67ddf38e363"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
const auth = firebase.auth();

function login() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const errorMessage = document.getElementById("error-message");

  if (!email || !password) {
    errorMessage.textContent = "Please enter email and password.";
    return;
  }

  auth.signInWithEmailAndPassword(email, password)
    .then((userCredential) => {
      console.log("Login successful:", userCredential.user);
      window.location.href = "admin-dashboard.html";
    })
    .catch((error) => {
      console.error("Login error:", error);
      errorMessage.textContent = "Invalid email or password!";
    });
}
