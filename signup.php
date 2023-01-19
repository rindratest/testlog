<?php
session_start();

// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Vérification des données
$error = false;
if(empty($username) || empty($password) || empty($email)){
  $error = true;
  echo "Veuillez remplir tous les champs.<br>";
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $error = true;
  echo "Adresse email non valide.<br>";
}

// Si pas d'erreur, enregistrement des données en base de données
if(!$error){
  // Connexion à la base de données
  $conn = mysqli_connect("host", "username", "password", "database");

  // Préparation de la requête d'insertion
  $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

  // Exécution de la requête
  mysqli_query($conn, $query);

  // Fermeture de la connexion
  mysqli_close($conn);

  echo "Inscription réussie !<br>";
  echo "<a href='login.php'>Connectez-vous</a>";
}
?>
