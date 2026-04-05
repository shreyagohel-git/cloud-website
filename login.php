<!DOCTYPE html>
<html>
<head>
    <title>Login System</title>
</head>
<body>

<h2>Signup</h2>
<input type="email" id="email" placeholder="Enter email"><br><br>
<input type="password" id="password" placeholder="Enter password"><br><br>
<button onclick="signup()">Signup</button>

<h2>Login</h2>
<button onclick="login()">Login</button>

<script type="module">
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";

// 🔴 PASTE YOUR CONFIG HERE
 const firebaseConfig = {
    apiKey: "AIzaSyDeN1FBZNm6we3vKzIiG5-U8howVWBzBcA",
    authDomain: "cloudpractical1-186c2.firebaseapp.com",
    projectId: "cloudpractical1-186c2",
    storageBucket: "cloudpractical1-186c2.firebasestorage.app",
    messagingSenderId: "1017782292678",
    appId: "1:1017782292678:web:db003442ae030f2ee407c7"
  };

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

// Signup function
window.signup = function() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    createUserWithEmailAndPassword(auth, email, password)
    .then(() => alert("Signup Successful"))
    .catch(err => alert(err.message));
}

// Login function
window.login = function() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    signInWithEmailAndPassword(auth, email, password)
    .then(() => alert("Login Successful"))
    .catch(err => alert(err.message));
}
</script>

</body>
</html>